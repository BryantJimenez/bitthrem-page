<?php

namespace App\Http\Controllers;

use App\Best;
use App\Country;
use App\Http\Requests\BestStoreRequest;
use App\Http\Requests\BestUpdateRequest;
use Illuminate\Http\Request;

class BestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $bests=Best::orderBy('id', 'DESC')->get();
        return view('admin.bests.index', compact('bests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $countries=Country::orderBy('name', 'ASC')->get();
        return view('admin.bests.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BestStoreRequest $request) {
        $country=Country::where('iso', request('country_id'))->firstOrFail();
        $data=array('name' => request('name'), 'lastname' => request('lastname'), 'country_id' => $country->id);
        $best=Best::create($data);

        if ($best) {
            // Mover imagen a carpeta bests y extraer nombre
            if ($request->hasFile('photo')) {
                $file=$request->file('photo');
                $photo=store_files($file, $best->slug, '/admins/img/bests/');
                $best->fill(['photo' => $photo])->save();
            }

            return redirect()->route('mejores.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El usuario top ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('mejores.create')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInputs();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Best $best) {
        $countries=Country::orderBy('name', 'ASC')->get();
        return view('admin.bests.edit', compact("best", "countries"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BestUpdateRequest $request, Best $best) {
        $country=Country::where('iso', request('country_id'))->firstOrFail();
        $data=array('name' => request('name'), 'lastname' => request('lastname'), 'country_id' => $country->id);
        $best->fill($data)->save();        

        if ($best) {
            // Mover imagen a carpeta bests y extraer nombre
            if ($request->hasFile('photo')) {
                $file=$request->file('photo');
                $photo=store_files($file, $best->slug, '/admins/img/bests/');
                $best->fill(['photo' => $photo])->save();
            }

            return redirect()->route('mejores.edit', ['best' => $best->slug])->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El usuario top ha sido editado exitosamente.']);
        } else {
            return redirect()->route('mejores.edit', ['best' => $best->slug])->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Best  $best
     * @return \Illuminate\Http\Response
     */
    public function destroy(Best $best)
    {
        $best->delete();
        if ($best) {
            return redirect()->route('mejores.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'El usuario top ha sido eliminado exitosamente.']);
        } else {
            return redirect()->route('mejores.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, Best $best) {
        $best->fill(['state' => "0"])->save();
        if ($best) {
            return redirect()->route('mejores.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El usuario top ha sido desactivado exitosamente.']);
        } else {
            return redirect()->route('mejores.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, Best $best) {
        $best->fill(['state' => "1"])->save();
        if ($best) {
            return redirect()->route('mejores.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El usuario top ha sido activado exitosamente.']);
        } else {
            return redirect()->route('mejores.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
