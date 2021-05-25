<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles=Article::with(['category'])->orderBy('id', 'DESC')->get();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories=Category::where([['state', '1'], ['type','3']])->orderBy('name', 'ASC')->get();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request) {
        $category=Category::where('slug', request('category_id'))->firstOrFail();
        $data=array('title' => request('title'), 'content' => request('content'), 'category_id' => $category->id);
        $article=Article::create($data);

        if ($article) {
            // Mover imagen a carpeta articles y extraer nombre
            if ($request->hasFile('image')) {
                $file=$request->file('image');
                $image=store_files($file, $article->slug, '/admins/img/articles/');
                $article->fill(['image' => $image])->save();
            }
            return redirect()->route('articulos.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El artículo ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('articulos.create')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInputs();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        $categories=Category::where([['state', '1'], ['type','3']])->orderBy('name', 'ASC')->get();
        return view('admin.articles.edit', compact("categories", "article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateRequest $request, Article $article) {
        $category=Category::where('slug', request('category_id'))->firstOrFail();
        $data=array('title' => request('title'), 'content' => request('content'), 'category_id' => $category->id);
        $article->fill($data)->save();

        if ($article) {
            // Mover imagen a carpeta articles y extraer nombre
            if ($request->hasFile('image')) {
                $file=$request->file('image');
                $image=store_files($file, $article->slug, '/admins/img/articles/');
                $article->fill(['image' => $image])->save();
            }
            return redirect()->route('articulos.edit', ['article' => $article->slug])->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El artículo ha sido editado exitosamente.']);
        } else {
            return redirect()->route('articulos.edit', ['article' => $article->slug])->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) {
        $article->delete();
        if ($article) {
            return redirect()->route('articulos.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'El artículo ha sido eliminado exitosamente.']);
        } else {
            return redirect()->route('articulos.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, Article $article) {
        $article->fill(['state' => "0"])->save();
        if ($article) {
            return redirect()->route('articulos.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El artículo ha sido desactivado exitosamente.']);
        } else {
            return redirect()->route('articulos.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, Article $article) {
        $article->fill(['state' => "1"])->save();
        if ($article) {
            return redirect()->route('articulos.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El artículo ha sido activado exitosamente.']);
        } else {
            return redirect()->route('articulos.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
