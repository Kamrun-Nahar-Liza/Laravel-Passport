<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    public function index(){

        $data = [];
        $data['posts'] = Post::select('id','title','description')->get();
        return view('post.index', $data);

    }

    public function create(){

        $data=[];
        return view('post.create', $data);
        
    }

    public function store(Request $request){
        
        $rules= [
            'title' => 'required',
            'description' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Post::create([

            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        //redirect

        session()->flash('message','Added Successfully');
        session()->flash('type','success');
        return redirect()->route('posts.create');

    }

    public function show($id){

        $data=[];
        $data['post'] = Post::select('id','title','description')->find($id);
        return view('post.show', $data);
   }

}
