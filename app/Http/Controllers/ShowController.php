<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class ShowController extends Controller
{
    //this function return file control page 
    public function index()
    {
        if(Session::get("password") == "m#2673&665#mos50#coma"){
            $posts = Post::all();
        $count = $posts->count();
        return view("main.control", [
            "posts" => $posts,
            "count" => $count
        ]);
        }else{
           return redirect("/chackadmen");
        }
        
  
    }
    public function services()
    {

        $posts = DB::table('posts')->where("class", "srv")->orderBy("id", "DESC")->get();

        return view("main.servisece", [
            "posts" => $posts

        ]);
    }
    public function preveous()
    {
        $prevuas = DB::table("posts")->where("class", "per")->orderBy("id", "DESC")->take(3)->get();
        return view("main.preveous", [
            "pervuas" => $prevuas
        ]);
    }
    public function show($id)
    {
        $posts = DB::table('posts')->where("class", "srv")->orderBy("id", "DESC")->get();
        $product = Post::find($id);
        return view("main.show", [
            "product" => $product,
            "posts" => $posts
        ]);
    }
    public function controlSrv()
    {
        if(Session::get("password") == "m#2673&665#mos50#coma"){
            $servs = DB::table("posts")->where("class", "srv")->orderBy("id", "DESC")->get();
            $count = $servs->count();
            return view("main.controlServisce", [
                "servs" => $servs,
                "count" => $count
            ]);
        }else{
           return redirect("/chackadmen");
        }
       
    }
    public function controlPre()
    {
        if(Session::get("password") == "m#2673&665#mos50#coma"){
        $prves = DB::table("posts")->where("class", "per")->orderBy("id", "DESC")->get();
        $count = $prves->count();

        return view("main.controlPrevious", [
            "preuas" => $prves,
            "count" => $count

        ]);
    }else{
       return redirect("/chackadmen");
    }
        
    }
    public function addSRV()
    {
        if(Session::get("password") == "m#2673&665#mos50#coma"){
       
        return view("main.addServisce");
    }else{
       return redirect("/chackadmen");
    }

    }
    public function addProudcut()
    {
        
    if(Session::get("password") == "m#2673&665#mos50#coma"){
       
        return view("main.addProduct");
    }else{
       return redirect("/chackadmen");
    }

    }
    public function CreateSrv(Request $request)
    {


        if(Session::get("password") == "m#2673&665#mos50#coma"){
            if (empty($request->img) && empty($request->title) && empty($request->descrption)) {
                dd("لم يتم تحميل صورة او عنوان او وصف !");
            } else {
                $request->validate([
                    "title" => "required",
                    "descrption" => "required",
                    "img" => "required|mimes:jpg,png,jpeg",
                ]);
    
                $newimgname = time() . "-" . $request->title . '.' . $request->img->extension();
    
                $request->img->move(public_path("imges"), $newimgname);
    
                $srvs = new Post();
                $srvs->class = $request->Input("class");
                $srvs->title = $request->input("title");
                $srvs->descrption = $request->input("descrption");
                $srvs->price = $request->input("price");
                $srvs->tiam = null;
                $srvs->img = $newimgname;
                $srvs->save();
                return redirect()->route("controlSrv");
            }
        }else{
           return redirect("/chackadmen");
        }

       
    }
    public function chackAdmin(Request $request){
          if( $request->input("id") === "29086542210"){
       if($request->input("password") === "m#2673&665#mos50#coma"){
             Session::put("password", $request->input("password"));
             return redirect("/control");
        }else{
            return redirect("/");
        }

       }else{
        return redirect("/");
       }
    }
    
    
}
