<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Nav;

class AboutController extends Controller
{
    function index(){
        
        return view('layout.ant_furniture.page.about');

    }
}
