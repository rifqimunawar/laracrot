<?php

namespace App\Http\Controllers;

use App\Models\HBN;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HBNController extends Controller
{
    public function index(Request $request)
    {
    $hbns = HBN::latest()->get();
    return view ('admin.hbn.index', compact('hbns'));
    }
}
