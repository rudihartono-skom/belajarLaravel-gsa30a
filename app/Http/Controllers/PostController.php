<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createstts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'gambar_post' => 'mimes:png,jpg,jpeg,gif|image|max:5048',
                'penulis_post' => 'required',
                'isi_post' => 'required',
                'judul_post' => 'required',
            ]
        );

        $file = $request->file('gambar_post');
        $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar_post')->extension());

        $post = new Post;
        $post->penulis_post = $request['penulis_post'];
        $post->judul_post   = $request['judul_post'];
        $post->isi_post     = $request['isi_post'];
        $post->gambar_post  = $path;
        $post->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::find($id);
        return view('editstts', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'gambar_post' => 'mimes:png,jpg,jpeg,gif|image|max:5048',
            ]
        );

        if ($request->file('gambar_post')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $file = $request->file('gambar_post');
            $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar_post')->extension());
        } else {
            $path = $request->oldImage;
        }

        $post = Post::find($id);
        $post->penulis_post = $request['penulis_post'];
        $post->judul_post   = $request['judul_post'];
        $post->isi_post     = $request['isi_post'];
        $post->gambar_post  = $path;
        $post->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy('id', $id);
        return redirect('/home');
    }
}
