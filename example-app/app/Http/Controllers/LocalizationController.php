<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
class LocalizationController extends Controller
{
    public function index($locale){
        App::setLocale($locale);
        session()->put('locale', $locale);
        // dd(session('locale')); // Check session data
        return back();

        // return redirect()->back();
        // return redirect();
        // return;
    }
}
