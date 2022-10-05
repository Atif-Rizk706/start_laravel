<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class userController extends  BaseController
{
    public function show_name(){
        return "atif admibn";
    }
    public function get_index(){
        return view("welcome");
    }
    public function show_data(){
        $data=new \stdClass();
        $data->id=2727221;
        $data->name="atif1";
        $arr=[];
        return view("welcome",compact("arr") );
    }
}
