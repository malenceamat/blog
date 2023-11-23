<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\gallery;
use App\Models\Photo;

use Illuminate\Support\Facades\Storage;
use App\Models\sliders;

class PostController extends Controller
{
    public function submit(PostRequest $req)
    {
        $validatedData = $req->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);                               //валидация
        $path = Storage::put('public/image', $req->file('image'));  // cохраняет наш файл(фотку) в папку image
        $name = $req->file('image')->getClientOriginalName();  // позволяет работать с локальными данными в нашем проекте и отправить туда файл
        $path = $req->file('image')->store('image');  // отправляет наш файл(фотку) в папку image
        $photos = sliders::all();  //показывает все фотки
        $body = $req->body;
        $text = $req->text;
        $button = $req->buttons;
        $mama = $req->mama;
        Photo::create([
            'head' => $body,
            'support' =>$text,
            'buttons' =>$button,
            'mama' =>$mama,
            'body' => $path,
            'name' => $name
        ]);
                //сохранение текста из формы в бд
        return view('slider', [
            'photos' => $photos,
        ])->with('status', 'Изображение было загружено');
    }
    public function slider()
    {
        $photos = Photo::all();
        return view('slider', ['photos' => $photos])->with('status', 'Изображение было загружено');
    }
}










