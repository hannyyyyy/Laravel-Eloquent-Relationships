<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts from Model
        $posts = Post::latest()->get(); //untuk mengambil semua data dari model Post yang diurutkan berdasarkan waktu pembuatan atau Mengambil semua post terbaru.

        //passing posts to view
        return view('posts', compact('posts')); // Mengirim data ke view.
        // view('posts') → Mengembalikan tampilan (blade template) yang berada di file resources/views/posts.blade.php.
        // ompact('posts') → Mengirimkan variabel $posts ke dalam view dengan menggunakan fungsi compact(), sehingga data bisa diakses di dalam file Blade.
    }
}