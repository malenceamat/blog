<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('contact.svyaz');
    }

    public function input(Request $req)
    {

        $soup = new Registration();
        $soup->name = $req->input('name');
        $soup->email = $req->input('email');
        $soup->phone = $req->input('tel');
        $soup->select = $req->input('department');
        $soup->message = $req->input('message');
        $soup->save();

        return view('contact.svyaz');
    }

    public function table()
    {
        return view('adminka.reg', [
            'table' => Registration::paginate(5)]);
    }

    public function delete($id)
    {
        $delete = Registration::find($id);
        $delete->delete();
        return redirect('/reg');
    }
    public function index2()
    {
        return view('hueta');
    }
    public function autocomplete(Request $request)
    {
        $res = Registration::select("name")
            ->where("name", "LIKE", "%{$request->term}%")
            ->get();

        return response()->json($res);
    }
    public function search()
    {
        $search_text = $_GET['query'];
        $table = Registration::where('name','LIKE','%'.$search_text.'%')->get();
        return view('search', compact('table'));
    }
}
