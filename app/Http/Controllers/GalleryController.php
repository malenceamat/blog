<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\gallery;
use Illuminate\Support\Facades\Storage;
class GalleryController extends Controller
{
    public function index()
    {
        $images = gallery::get();
        return view('allimage', compact('images'));
    }
    public function upload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
         Storage::put('/images', $request->file('image'));
         $request->file('image')->getClientOriginalName();
         $path = $request->file('image')->store('images');
         gallery::create([
             'image' => $path
         ]);
        return redirect('allimage');
    }
}











