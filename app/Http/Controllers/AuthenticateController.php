<?php

namespace App\Http\Controllers;

use App\Models\StudentMarkModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AuthenticateController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $student = StudentMarkModel::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('id', $student->idStudent);
            $request->session()->put('lastName', $student->lastName);
            $request->session()->put('firstName', $student->firstName);
            return Redirect::route("overview");
        } catch (Exception $e) {
            return Redirect::route("login")->with('error', [
                "message" => 'Sai Email hoặc password',
                "email" => $email
            ]);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route("login");
    }
}
