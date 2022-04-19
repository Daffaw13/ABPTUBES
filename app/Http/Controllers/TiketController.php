<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;

class TiketController extends Controller
{
    public function index()
    {
        $tiket=Tiket::all();
    }
}
