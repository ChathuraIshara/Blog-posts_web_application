<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;


class blogcontroller extends Controller
{
    public function blogPage()
    {
        $post=post::all();
        $user=User::all();

     //  dd($user);
        //dd($post->title);
        
        return view('blog')->with('posts',$post);
       // return view('blog')->with('users',$user);
    }
    public function blogCreate()
    {
        return view('blogcreate');
    }
    public function store(Request $request)
    {
        $post=new post;
        $this->validate($request,[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg|max:5048'

        ]);
        $imagenewname=uniqid().'-'.$request->title .'.'.$request->img->extension();
        $request->img->move(public_path('images'),$imagenewname);

        $slug=SlugService::createSlug(post::class,'slug',$request->title);
       $post->slug=$slug;
       $post->title=$request->title;
       $post->description=$request->desc;
       $post->img_path= $imagenewname;
       $post->user_id=auth()->user()->id;

       $post->save();
       
       return redirect(route('blog'))->with('message','your post has been added');
       
    }
    public function readMore($id)
    {
        $post=post::find($id);
       
        return view('readmore')->with('post',$post);
    }
    public function blogEditPage($id)
    {
        $post=post::find($id);
        return view('edit')->with('post',$post);
        
    }
    public function editCancel()
    {
        return view('blog');
    }
    public function blogEditStore(Request $request)
    {
        $post=post::find($request->id);

        $this->validate($request,[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg|max:5048'

        ]);


        $post->title=$request->title;
        $post->description=$request->desc;

        $imagenewname=uniqid().'-'.$request->title .'.'.$request->img->extension();
        $request->img->move(public_path('images'),$imagenewname);
        $slug=SlugService::createSlug(post::class,'slug',$request->title);

        $post->img_path=$imagenewname;
        $post->user_id=auth()->user()->id;
        $post->slug=$slug;
        
        $post->save();
        return redirect(route('blog'))->with('message','your post has been edited');

    }
    public function delete($id)
    {
        $post=post::find($id);
        $post->delete();
        return redirect(route('blog'))->with('message','your post has been deleted');
    }
}
