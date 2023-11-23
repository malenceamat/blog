<?php

namespace App\Http\Controllers;


use App\Mail\LoginDetails;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class RegUserController extends Controller
{
    public function index($id)
    {
        $data = Registration::find($id);
        return view('client', ['data' => $data]);
    }
    public function delete($id)
    {
        $delete = Registration::find($id);
        $delete->delete();
        return redirect('/reg');
    }
    public function register(Request $req)
    {
        $password = Str::random(10);
        $user = new User();
        $user->name = $req->input('fullName');
        $user->email = $req->input('email');
        $email = $req->input('email');
        $name = $req->input('fullName');
        $details = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];

        Mail::send('login', $details, function ($message) use ($email, $name) {
            $message->to($email, $name)->subject('Данные для входа');
        });

        $hashedPassword = Hash::make($password);
        $user->password = $hashedPassword;
        $user->save();


        return redirect('/reg');
    }
}
