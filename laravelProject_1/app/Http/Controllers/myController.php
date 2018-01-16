<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
public function index()
{
	//return view('home');
	return "home from myController";
}
public function user()
{
	$anyName = "SURUZZAMAN";
	$id = '02154';
	$phone ='01744393549';
	$address = 'Bogra';

	return view('user', compact('anyName','id','phone'))->with('homeTown',$address);
}





















}