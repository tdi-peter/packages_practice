<?php

namespace Ppackages\Practice;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //
    public function index(){
        $message = '你好!';

        return view('PracticeViewName::welcome',['message'=>$message]);
    }
}
