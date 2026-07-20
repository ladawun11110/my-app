<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {

    function form(){    
        
        return view("form");
    }

    function insert(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    }
}