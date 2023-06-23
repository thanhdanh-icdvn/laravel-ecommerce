<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostTaskController extends Controller
{
    public function uploadImage(Request $request)
    {
        $img_path = request()->file('file')->store('uploads', 'public');

        return response()->json(['location' => asset('storage/'.$img_path)]);
    }
}
