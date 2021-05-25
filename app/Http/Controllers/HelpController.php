<?php

namespace App\Http\Controllers;

use App\Category;
use App\Help;
use App\Http\Requests\HelpStoreRequest;
use App\Http\Requests\HelpUpdateRequest;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $helps=Help::with(['category'])->orderBy('id', 'DESC')->get();
        return view('admin.helps.index', compact('helps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories=Category::where([['state', '1'], ['type','2']])->orderBy('name', 'ASC')->get();
        return view('admin.helps.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HelpStoreRequest $request) {
        $category=Category::where('slug', request('category_id'))->firstOrFail();
        $data=array('title' => request('title'), 'content' => request('content'), 'category_id' => $category->id);
        $help=Help::create($data);

        if ($help) {
            return redirect()->route('ayudas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El artículo del centro de ayuda ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('ayudas.create')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInputs();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help) {
        $categories=Category::where([['state', '1'], ['type','2']])->orderBy('name', 'ASC')->get();
        return view('admin.helps.edit', compact("categories", "help"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HelpUpdateRequest $request, Help $help) {
        $category=Category::where('slug', request('category_id'))->firstOrFail();
        $data=array('title' => request('title'), 'content' => request('content'), 'category_id' => $category->id);
        $help->fill($data)->save();

        if ($help) {
            return redirect()->route('ayudas.edit', ['help' => $help->slug])->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El artículo del centro de ayuda ha sido editado exitosamente.']);
        } else {
            return redirect()->route('ayudas.edit', ['help' => $help->slug])->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help) {
        $help->delete();
        if ($help) {
            return redirect()->route('ayudas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'El artículo del centro de ayuda ha sido eliminado exitosamente.']);
        } else {
            return redirect()->route('ayudas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, Help $help) {
        $help->fill(['state' => "0"])->save();
        if ($help) {
            return redirect()->route('ayudas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El artículo del centro de ayuda ha sido desactivado exitosamente.']);
        } else {
            return redirect()->route('ayudas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, Help $help) {
        $help->fill(['state' => "1"])->save();
        if ($help) {
            return redirect()->route('ayudas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El artículo del centro de ayuda ha sido activado exitosamente.']);
        } else {
            return redirect()->route('ayudas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
