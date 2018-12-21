<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if (Auth::check())
        {
            return redirect()->route('top');
        }
        return redirect()->route('login');
    }

    public function formLogin()
    {
        if (Auth::check())
        {
            return redirect()->route('top');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('top');
        }

        return redirect()->route('form_login');
    }

    public function top()
    {
        return view('top');
    }

    public function logout()
    {
        Auth::guard()->logout();

        Session::flush();

        return redirect()->route('form_login');
    }

    public function download(Request $request) {
        if ($request['url'] == "") {
            return redirect()->route('top');
        }

        base64_encode(QrCode::format('png')->margin(0)->size(200)->generate($request['url'], 'QRCode.png'));

        return Response::download('QRCode.png');
    }
}
