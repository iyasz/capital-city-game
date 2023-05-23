<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    public function pertanyaan($id)
    {
        $pertanyaan = Test::findOrFail($id);

        return view('test.pertanyaan', compact('pertanyaan'));
        
    }
}
