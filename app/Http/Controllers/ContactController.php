<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
       //echo 'this is our contact page!';
       return view('contact'); 

    }
}
