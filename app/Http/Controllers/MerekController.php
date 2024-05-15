<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Support\Facades\App;

class MerekController extends Controller
{
    public function tampilMerek()
    {
        $mereks = Merek::all();
        return view('mereks/index', compact('mereks'));
    }

    public function show($id)
    {
        $mereks = Merek::findOrFail($id);
        return view('mereks.show', compact('mereks'));
    }
}
