<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\gallery;
use App\Models\Photo;
use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function edit($id)
    {
        $data = sliders::find($id);
        return view('edit', ['data' => $data]);



    }
    public function update(Request $req)
    {
        $data = sliders::find($req->id);
        $data->head = $req->head;
        $data->support = $req->support;
        $data->buttons = $req->buttons;
        $data->mama = $req->mama;
        if ($req->hasFile('image')) {
            $data = $req->file('image');
        }
        $data->save();
        if ($req['body']) {
            if ($req['body'] == $data['body']) {
                Storage::disk('public')->delete('image', $data['body']);
                $data ['body'] =
                    Storage::disk('public')->put('image', $req['body']);
            }
        }
        $data->save();
        return redirect('tablica');
    }
}






