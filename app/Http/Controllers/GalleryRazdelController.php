<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\razdel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryRazdelController extends Controller
{
    public function formcr()
    {
        $data = razdel::all();
        return view('createslide',['data' => $data]);
    }
    public function sova(Request $req)
    {
        $this->validate($req, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        Storage::put('public/images', $req->file('image'));
        $req->file('image')->getClientOriginalName();
        $path = $req->file('image')->store('images');
        $data = gallery::create([
            'image' => $path
        ]);
        $data->razdels()->sync($req->input('categories'));
        return view('gallery');
    }
    public function poezd()
    {
        $vsefotki = gallery::all();
        return view ('allimage',['vsefotki' => $vsefotki]);
    }
    public function srem($id)
    {
        $delete = gallery::find($id);
        Storage::delete('images');
        Storage::disk('public')->delete('images', $delete['image']);
        $delete->delete();
        return redirect('/allimage');
    }
    public function osnova1()
    {
        $vsefotki = razdel::with('gallerys')->get();
        return view ('content',['vsefotki' => $vsefotki]);
    }
}
