<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // AuthorizesRequests → Digunakan untuk menangani otorisasi menggunakan policy dan gate.
    // DispatchesJobs → Memungkinkan pengiriman (dispatch) pekerjaan ke antrian (queue) Laravel.
    // ValidatesRequests → Memudahkan proses validasi data dalam request.
}
