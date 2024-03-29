<?php

namespace App\Http\Controllers;

use App\User;
use App\Best;
use App\Help;
use App\Article;
use App\Question;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Auth;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $users=User::count();
        $bests=Best::count();
        $helps=Help::count();
        $articles=Article::count();
        $questions=Question::count();
        return view('admin.home', compact('users', 'bests', 'helps', 'articles', 'questions'));
    }

    public function profile() {
        return view('admin.profile');
    }

    public function profileEdit() {
        return view('admin.edit');
    }

    public function profileUpdate(ProfileUpdateRequest $request) {
        $user=User::where('slug', Auth::user()->slug)->firstOrFail();
        $data=array('name' => request('name'), 'lastname' => request('lastname'), 'phone' => request('phone'));

        if (!is_null(request('password'))) {
            $data['password']=Hash::make(request('password'));
        }

        $user->fill($data)->save();

        if ($user) {
            // Mover imagen a carpeta users y extraer nombre
            if ($request->hasFile('photo')) {
                $file=$request->file('photo');
                $photo=store_files($file, $user->slug, '/admins/img/users/');
                $user->fill(['photo' => $photo])->save();
                Auth::user()->photo=$photo;
            }
            Auth::user()->slug=$user->slug;
            Auth::user()->name=request('name');
            Auth::user()->lastname=request('lastname');
            Auth::user()->phone=request('phone');
            if (!is_null(request('password'))) {
                Auth::user()->password=Hash::make(request('password'));
            }
            return redirect()->back()->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El perfil ha sido editado exitosamente.']);
        } else {
            return redirect()->back()->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInputs();
        }
    }

    public function emailVerifyAdmin(Request $request)
    {
        $count=User::where('email', request('email'))->count();
        if ($count>0) {
            return "false";
        } else {
            return "true";
        }
    }

    public function searchHelps(Request $request) {
        $helps=Help::with(['category'])->where([['title', 'like', '%'.request('query').'%'], ['state', '1']])->orderBy('title', 'ASC')->get()->map(function ($help) {
            if ($help['category']->state=="1") {
                $route=new LaravelLocalization();
                $route=$route->getURLFromRouteNameTranslated(request('lang'), 'routes.web.help', ['category:slug' => $help['category']->slug, 'help:slug' => $help->slug], true);
                return array('data' => $route, 'value' => $help->translate('title', request('lang')));
            }
            return NULL;
        })->reject(function ($help) {
            return is_null($help);
        })->values();
        return response()->json(["suggestions" => $helps]);
    }

    public function searchArticles(Request $request) {
        $articles=Article::where([['title', 'like', '%'.request('query').'%'], ['state', '1']])->orderBy('title', 'ASC')->get()->map(function ($article) {
            $route=new LaravelLocalization();
            $route=$route->getURLFromRouteNameTranslated(request('lang'), 'routes.web.article', ['article:slug' => $article->slug], true);
            return array('data' => $route, 'value' => $article->translate('title', request('lang')));
        });
        return response()->json(["suggestions" => $articles]);
    }
}
