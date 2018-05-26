<?php

namespace App\Http\Controllers;

use DB;
use App\Gallery;
use App\HomeSlide;
use App\Event;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	$event=DB::table('events')->orderBy('created_at','asc')->take(3)->get();
        $homeslides=DB::table('homeslides')->orderBy('created_at','asc')->take(5)->get();
    	return view('ngo.home',['homeslides'=>$homeslides,'event'=>$event]);
    }
}
