<?php

namespace App\Http\Controllers; // Menentukan namespace controller

use App\Models\User; // Mengimpor model User untuk digunakan dalam controller


class UserController extends Controller
{    
     /**
     * Method index untuk mengambil dan menampilkan daftar pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       // Mengambil semua data pengguna dari database, diurutkan berdasarkan yang terbaru.
        $users = User::latest()->get(); 

        // Mengirimkan data pengguna ke view "users.blade.php".
        return view('users', compact('users')); // Mengirim data ke view.

    }
}