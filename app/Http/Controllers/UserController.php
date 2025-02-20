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
        //get users form Model
        $users = User::latest()->get(); 

        //passing user to view
        return view('users', compact('users')); // Mengirim data ke view.

    }
}