<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){

         $offers = Travel::all();
        return view('offers', compact('offers'));
    }
}
