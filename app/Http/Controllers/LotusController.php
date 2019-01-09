<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotusController extends Controller
{
    public function who()
    {
      return view('who');
    }
}
