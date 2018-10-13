<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
  public function lang($code) {
    $translator = new \Dedicated\GoogleTranslate\Translator;
    $view = view('iansection')->render();
    $result = $translator->setSourceLang('en')
                         ->setTargetLang($code)
                         ->translate($view);
      return $result;
  }
