<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index($slug)
    {
        $province = Province::where('slug', $slug)->first();
        return view('province.city', compact('province'));
        
    }

    public function searchCapitalCity(Request $request)
    {
        $capital_city = strtolower($request->input('capital_city'));
        $slug = $request->input('slug');

        $province = Province::where('slug', $slug)->first();

        if($province->capital_city == $capital_city){
            return response()->json('TRUE');
        }else {
            return response()->json('FALSE');
        }
        
    }
}
