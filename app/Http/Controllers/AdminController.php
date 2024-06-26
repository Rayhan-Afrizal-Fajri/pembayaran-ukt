<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $detailUsers = DetailUser::all();
        return view('admin.daftar-mahasiswa', compact('detailUsers'));
    }
}