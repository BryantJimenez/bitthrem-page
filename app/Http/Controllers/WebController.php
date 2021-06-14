<?php

namespace App\Http\Controllers;

use App\User;
use App\Country;
use App\Setting;
use App\Category;
use App\Question;
use App\Article;
use App\Help;
use Illuminate\Http\Request;
use App\Http\Requests\ContactSendMessageRequest;
use App\Notifications\MessageContactNotification;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use voku\helper\HtmlDomParser;

class WebController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $setting=Setting::firstOrFail();
        $categories=Category::with(['questions'])->where('state', '1')->get();
        $articles=Article::where('state', '1')->orderBy('id', 'DESC')->limit(4)->get();
        return view('web.home', compact('setting', 'categories', 'articles'));
    }

    public function about() {
        $setting=Setting::firstOrFail();
        return view('web.about', compact('setting'));
    }

    public function prices() {
        $setting=Setting::firstOrFail();
        $questions=Question::where('state', '1')->get();
        return view('web.prices', compact('setting', 'questions'));
    }

    public function referrals() {
        $setting=Setting::firstOrFail();
        return view('web.referrals', compact('setting'));
    }

    public function leaders() {
        $setting=Setting::firstOrFail();
        $countries=Country::with(['bests'])->orderBy('name', 'ASC')->get()->reject(function ($country) {
            return count($country['bests'])==0;
        })->values();
        return view('web.leaders', compact('setting', 'countries'));
    }

    public function faq() {
        $setting=Setting::firstOrFail();
        $categories=Category::with(['questions'])->where([['type', '1'], ['state', '1']])->get();
        return view('web.faq', compact('setting', 'categories'));
    }

    public function blog(Request $request) {
        $setting=Setting::firstOrFail();
        $categories=Category::where([['type', '3'], ['state', '1']])->limit(10)->get();
        $articles=Article::where('state', '1')->orderBy('id', 'DESC')->get();

        if ($request->has('category') && !empty(request('category')) && !is_null(request('category'))) {
            $category=Category::where('slug', request('category'))->first();
            if (!is_null($category)) {
                $articles=$articles->where('category_id', $category->id);
            } else {
                $articles=[];
            }
        }

        if ($request->has('page')) {
            $offset=7*(request('page')-1);
        } else {
            $offset=0;
        }
        $search=request()->all();

        $varPage='page';
        $page=Paginator::resolveCurrentPage($varPage);
        $pagination=new LengthAwarePaginator($articles->skip($offset)->take(7), $total=count($articles), $perPage = 7, $page, ['path' => Paginator::resolveCurrentPath(), 'pageName' => $varPage]);
        $articles=$articles->skip($offset)->take(7);

        return view('web.blogs.index', compact('setting', 'categories', 'articles', 'search', 'pagination'));
    }

    public function article($article) {
        $setting=Setting::firstOrFail();
        $article=Article::with(['user', 'category'])->where([['slug', $article], ['state', '1']])->firstOrFail();
        $html=HtmlDomParser::str_get_html($article->content)->findMultiOrFalse('p');
        if ($html!=false) {
            $html=$html->plaintext;
            $description=implode(" ", $html);
        } else {
            $description="";
        }
        $relateds=Article::where([['id', '!=', $article->id], ['state', '1']])->limit(6)->get();
        return view('web.blogs.show', compact('setting', 'article', 'description', 'relateds'));
    }

    public function helps_categories() {
        $setting=Setting::firstOrFail();
        $categories=Category::where([['type', '2'], ['state', '1']])->get();
        return view('web.helps.categories', compact('setting', 'categories'));
    }

    public function helps($category) {
        $setting=Setting::firstOrFail();
        $categories=Category::where([['type', '2'], ['state', '1']])->get();
        $category=Category::with(['helps'])->where([['slug', $category], ['type', '2'], ['state', '1']])->firstOrFail();
        $helps=$category['helps']->where('state', '1')->map(function ($help) {
            $html=HtmlDomParser::str_get_html($help->content)->findMultiOrFalse('p');
            if ($html!=false) {
                $html=$html->plaintext;
                $help->content=implode(" ", $html);
            } else {
                $help->content=NULL;
            }
            return $help;
        });
        return view('web.helps.index', compact('setting', 'categories', 'category', 'helps'));
    }

    public function help($category, $help) {
        $setting=Setting::firstOrFail();
        $help=Help::where([['slug', $help], ['state', '1']])->firstOrFail();
        $html=HtmlDomParser::str_get_html($help->content)->findMultiOrFalse('p');
        if ($html!=false) {
            $html=$html->plaintext;
            $description=implode(" ", $html);
        } else {
            $description="";
        }
        $categories=Category::where([['type', '2'], ['state', '1']])->get();
        $category=Category::with(['helps'])->where([['slug', $category], ['type', '2'], ['state', '1']])->firstOrFail();
        $relateds=Help::with(['category'])->where([['id', '!=', $help->id], ['state', '1']])->limit(6)->get();
        return view('web.helps.show', compact('setting', 'help', 'description', 'categories', 'category', 'relateds'));
    }

    public function send(ContactSendMessageRequest $request) {
        $setting=Setting::where('id', 1)->firstOrFail();

        $contact=new User;
        $contact->email=$setting->email;
        $contact->name=request('name');
        $contact->email_contact=request('email');
        $contact->subject=request('subject');
        $contact->message= request('message');
        $contact->notify(new MessageContactNotification());

        if ($contact) {
            return redirect()->back()->with(['type' => 'success', 'title' => trans('web.messages.sent-success.title'), 'msg' => trans('web.messages.sent-success.message')]);
        } else {
            return redirect()->back()->with(['type' => 'error', 'title' => trans('web.messages.sent-failed.title'), 'msg' => trans('web.messages.sent-failed.message')])->withInputs();
        }
    }
}