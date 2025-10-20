<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KataBijakController extends Controller
{
    public function kata()
    {
        echo "Rajin Pangkal Pandai";
    }
    public function pepatah()
    {
        return view('kata-bijak.kataPepatah');
    }
}
