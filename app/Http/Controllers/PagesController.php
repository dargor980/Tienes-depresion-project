<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function proyecto(){
        return view('proyecto');
    }

    public function test(){
        return view('test');
    }

    public function galeria(){
        return view('gallery');
    }

    public function contacto(){
        return view('contact');
    }

    public function donaciones(){
        return view('donacion');
    }
}
