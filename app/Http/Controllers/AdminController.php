<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\registration;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dschc(){
        $informal =  registration:: Where('plan','informal')-> count();
        $formal =  registration:: Where('plan','formal')-> count();
        $equity =  registration:: Where('plan','equity')-> count();

        return view("DHome.Dschc", ["informal"=>$informal, "formal"=>$formal, "equity"=>$equity]);
    }


    public function blog(){
        $get = Admin:: get();

        return view("DHome.blog", ["get"=>$get]);
    }

    public function healthplan(){
        return view("DHome.healthplan");
    }

    public function blogform(){

        return view("DHome.blogform");
    }
    function Store(){
        $input = request()->validate([
            "myimage" =>"required",
            "date"=> "required",
            "title"=> "required",
            "post"=> "required",

        ]);
        if(request("myimage")){
            $input["myimage"] = request("myimage")->store("Admin");
        }
        Admin::create($input);
        return back();
    }

    public function BlogEx($id){
        $get = Admin::WHERE('id', $id)->get();

        return view("DHome.BlogEx", ["get"=>$get]);
     }


     public function view($id){
        $upload = request()->validate([
            "myimage" =>"required",
            "date"=> "required",
             "title"=> "required",
             "post"=> "required",
        ]);



        Admin:: whereId($id)->view($upload);
        return back();
    }



}
