<?php

namespace App\Http\Controllers;

// Mengimpor trait untuk menangani otorisasi, dispatching job, dan validasi
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// Kelas Controller utama yang akan diwarisi oleh controller lainnya
class Controller extends BaseController
{
    // Menggunakan trait untuk menyediakan fitur tambahan dalam controller
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
