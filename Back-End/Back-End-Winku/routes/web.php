<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/image/{uuid}', function ($uuid) {
    // Fetch the image from the database
    $image = \App\Models\Image::where('image_uuid', $uuid)->latest()->first();
    if (!$image) {
        abort(404);
    }

    // Get the image path
    $path = public_path('image/' . $image->name);

    // Check if the file exists
    if (!\Illuminate\Support\Facades\File::exists($path)) {
        abort(404);
    }

    // Serve the file
    return response()->file($path);
});

require __DIR__.'/auth.php';
