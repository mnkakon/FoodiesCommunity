<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Redirect, Input, Auth,View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$posts = Post::get();
        
        $posts = Post::where('user_id', Auth::user()->_id)->get();

        return view('home')
            ->with('posts', $posts);
    }

    public function editindex()
    {

        //$posts = Post::get();
        
        $posts = Post::get();

        return view('home')
            ->with('posts', $posts);
    }
    
   
       public function notificationindex()
    {
        //return 0;

        //$posts = Post::get();
        
        //$posts = Post::where('user_id', Auth::user()->_id)->get();

        return view('notification');
            //->with('posts', $posts);
    }
    
       public function categoryindex($id)
    {
       
       //return $id;
        //$posts = Post::get();
        
        $posts = Post::where('category',$id)->get();
        $currentIndex=$id;
        return View::make('home', compact('posts','currentIndex'));
        
    }

    public function create($id){
         $currentIndex=$id;
        return View::make('posts.create', compact('currentIndex'));
    }

    public function store(Request $request){
        $rules = [
            'post'   => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $post = new Post();
            $post->username = Auth::user()->name;
            $post->user_id = Auth::user()->_id;
            $post->category = $data['category'];
            $post->post = $data['post'];
            $post->completion_time = $data['completion_time'];

            if($post->save()){
                return redirect()->route('filterednotification',array('id'=>$data['category']))
                    ->with('success', 'posted successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to post!');
            }
        } 
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit')
                ->with('post', $post);    
    }

    public function update(Request $request, $id){
        $rules = [
            'post'   => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $post = Post::findOrFail($id);
            $post->post = $data['post'];

            if($post->save()){
               return redirect()->route('filterednotification',array('id'=>$post->category))
                    ->with('success', 'updated successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to update post!');
            }
        }
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        
        if($post->delete()){
             return redirect()->route('filterednotification',array('id'=>$post->category))
                    ->with('success', 'deleted successfully');
        }else{
            return redirect()->back()
                ->withInput()
                ->with('error', 'failed to delete post!');
        }
    }
}
