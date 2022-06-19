<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeldingsController extends Controller
{
    public function create()
    {
        return view('admin.weldings.create');
    }
}
