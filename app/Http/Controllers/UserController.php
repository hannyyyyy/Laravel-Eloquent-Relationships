<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get users form Model
        $users = User::latest()->get(); // Mengambil semua post terbaru.
        // User::latest() → Mengambil data dari model User dan mengurutkannya berdasarkan kolom created_at secara descending (dari terbaru ke lama).
        // ->get() → Menjalankan query dan mengambil semua data dalam bentuk koleksi (collection Laravel).

        //passing user to view
        return view('users', compact('users')); // Mengirim data ke view.

    }
}