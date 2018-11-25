<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function about(){
   	$title = 'We offer you information and updates on technology gigs and events';

   	return view('pages.about')->with('title', $title);
   }

   public function services(){
   	$data = array(
   	 'services' =>['web designing', 'Content Management', 'web development', 'Training']
   	
   	
   	);
   	return view('pages.services')->with($data);
   }
   
   public function contact(){

   	return view('pages.contact');
   } //
}
