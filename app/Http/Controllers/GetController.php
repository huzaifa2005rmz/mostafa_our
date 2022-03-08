<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactus;

class GetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prevuas = DB::table("posts")->where("class", "per")->orderBy("id", "DESC")->take(3)->get();
        $services = DB::table("posts")->where("class", "srv")->orderBy("id", "DESC")->take(3)->get();
        $countSrv = $services->count();
        $countPer = $prevuas->count();

        return view("main.home", [
            "boxex" => $prevuas,
            "countSrv" => $countSrv,
            "countPer" => $countPer,
            "services" => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!empty($request->img && !empty($request->title) && !empty($request->descrption))) {
            $request->validate([
                "title" => "required",
                "descrption" => "required",
                "img" => "required|mimes:jpg,png,jpeg",
            ]);

            $newimgname = time() . "-" . $request->title . $request->price . $request->class . '.' . $request->img->extension();

            $request->img->move(public_path("imges"), $newimgname);

            $post = new Post();
            $post->class = $request->Input("class");
            $post->title = $request->input("title");
            $post->descrption = $request->input("descrption");
            $post->price = $request->input("price");
            $post->tiam = $request->input("tiam");
            $post->img = $newimgname;
            $post->save();
            return redirect()->route("control.srv");
        } else {
            dd("لم يتم تحميل صورة او عنوان للمنشور او وصف !");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editData = Post::find($id);
        return view("main.edit")->with("editdata", $editData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        
        $post = Post::find($id);
        $post->title = $request->input("title");
        $post->tiam = $request->input("tiam");
        $post->descrption = $request->input("descrption");
        $post->price = $request->input("price");  
        if($request->img){
            $request->validate([
                "title" => "required",
                "descrption" => "required",
                "img" => "required|mimes:jpg,png,jpeg",
            ]);
    
            $newimgname = time() . "-" . $request->title . '.' . $request->img->extension();
    
            $request->img->move(public_path("imges"), $newimgname);

            $post->img = $newimgname;
        }
        $post->save();
        return redirect()->route("control");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //the delete function 

        $data = Post::find($id);
        $data->delete();
        return dd("تم الحذف بنجاح");
    }
    public function conuntus(Request $request){


        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $addres = $request->input("addres");
        $msg = $request->input("msg");


        $data = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "addres" => $addres,
            "msg" => $msg
        ];
        Mail::to("huzaifa2005rmz@gmail.com")->send(new contactus($data));
        return redirect("/");
    }
}
