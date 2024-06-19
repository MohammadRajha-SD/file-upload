<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    // php artisan storage:link
    public function handleImage(Request $request) {
        $request->validate([
            'image' => ['required', 'image', 'max:1000', 'min:100', 'mimes:png,jpg,jpeg,gif']
        ]);
        $request->image->store('/images');
        return redirect('/');
    }
    public function download() {
        return response()->download(public_path('storage/images/FnvHJl0OJRc8OGK0PHk9d8awFLCpVsKcyxJGmDH4.jpg'));
    }
}
