<?php

namespace App\Http\Controllers;

use App\User;
use App\Setting;
use App\Category;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests\ContactSendMessageRequest;
use App\Notifications\MessageContactNotification;

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
        return view('web.home', compact('setting', 'categories'));
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
            return redirect()->back()->with(['type' => 'success', 'title' => trans('messages.successful shipment'), 'msg' => trans('messages.the message has been sent successfully')]);
        } else {
            return redirect()->back()->with(['type' => 'error', 'title' => trans('messages.delivery failed'), 'msg' => trans('messages.an error occurred during the process, please try again')])->withInputs();
        }
    }
}