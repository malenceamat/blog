<?php

namespace App\Http\Controllers;



use App\Models\gallery;
use App\Models\sliders;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function qwe()
    {
        $video =Video::firstOrCreate();
        return view('video', ['video' => $video]);
    }
    public function insert(Request $req)
    {
        $video = Video::find(1);
        $video->Text = $req->Text;
        $video->SmallText = $req->SmallText;
        if (!empty($video) && $req->hasFile('video')) {
            Storage::disk('public')->delete('video', $video['video']);
            Storage::putFile('public/upload', $req->file('video'));
            $data = $req->file('video')->store('upload');
            $video->video = $data;
        }
        $video->save();
        return redirect('video');
    }
}
