<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function index(User $user){
       // dd($user->username);
        // dd(auth()->user());
    //    return view('dashboard');
        return view('dashboard',[
            'user'=>$user
        ]);
    }

    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){

        $this->validate($request,[
            'titulo' => 'required|max:250',
            'descripcion' => 'required|max:250',
            'imagen' => 'required'
        ]);

        Post::create([
            'titulo' => $request-> titulo,
            'descripcion' => $request-> descripcion,
            'imagen' => $request-> imagen,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('post.index', auth()->user()->username);



        //dd('hola desde el posts del formulario');
    }
}
