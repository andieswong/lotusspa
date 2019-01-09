<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotusController extends Controller
{
    public function who()
    {
      return view('who');
    }
    public function what()
    {
      return view('what');
    }
    public function mission()
    {
      return view('mission');
    }
    public function contact()
    {
      return view('contact');
    }
}
