<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Auth;

class HomeController extends Controller
{
    public function showLogin()
    {
        if (!Auth::guest()) {
            return Redirect::to('dashboard');
        }
        return view('login');
    }

    public function doLogin()
    {
        //rules for the inputs
        $rules = array(
            'name' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
            'password' => 'required|alphaNum|min:3'
        );

        //validation of rules
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            // create user data for the authentication
            $userdata = array(
                'name' => Input::get('name'),
                'password' => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                return Redirect::to('dashboard');
            } else {
                return Redirect::to('login')->withErrors("Incorrect login information!");
            }
        }
    }

    public function showDashboard()
    {
        if (Auth::guest()) {
            return Redirect::to('login');
        }
        return view('dashboard');
    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

}
