<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingUpdateRequest;

class SettingController extends Controller
{
    public function edit() {
        $setting=Setting::where('id', 1)->firstOrFail();
        return view('admin.settings.edit', compact("setting"));
    }

    public function update(SettingUpdateRequest $request) {
        $setting=Setting::where('id', 1)->firstOrFail();
        $setting->fill($request->all())->save();

        if ($setting) {
            return redirect()->route('ajustes.edit')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'Los ajustes han sido editados exitosamente.']);
        } else {
            return redirect()->route('ajustes.edit')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
