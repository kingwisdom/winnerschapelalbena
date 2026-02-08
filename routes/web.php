<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [PageController::class, 'index'])->name('home');

//blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

//admin management
Route::get('/wc', [AdminController::class, 'index'])->name('index');
Route::post('/save', [AdminController::class, 'store'])->name('store');
Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('posts.destroy');

// Who We Are
Route::prefix('who-we-are')->group(function () {
    Route::get('/', fn() => view('who.index'))->name('who');
    Route::get('/our-story', fn() => view('who.story'))->name('who.story');
    Route::get('/the-mandate', fn() => view('who.mandate'))->name('who.mandate');
    Route::get('/pillars', fn() => view('who.pillars'))->name('who.pillars');
    Route::get('/leadership', fn() => view('who.leadership'))->name('who.leadership');
});

// Ministries
Route::prefix('ministries')->group(function () {
    // Main page
    Route::get('/', function () {
        return view('ministries.index');
    })->name('ministries.index');

    // Children
    Route::get('/children', function () {
        return view('ministries.children');
    })->name('children');

    // Teens
    Route::get('/teens', function () {
        return view('ministries.teens');
    })->name('teens');

    // Youth Alive Fellowship
    Route::get('/youth-alive', function () {
        return view('ministries.yaf');
    })->name('yaf');

    // WSF
    Route::get('/wsf', function () {
        return view('ministries.wsf');
    })->name('wsf');

    // WOFBI
    Route::get('/wofbi', function () {
        return view('ministries.wofbi');
    })->name('wofbi');
});

// Give
Route::get('/give', fn() => view('give'))->name('give');

// Contact
Route::get('/contact', fn() => view('contact'))->name('contact');

// Blog (optional since home page references it)
Route::get('/blog', fn() => view('blog.index'))->name('blog');

// Watch Live
Route::get('/watch-live', fn() => view('watch.index'))->name('watch');

// Extra Links from footer
Route::get('/covenant-hour-of-prayer', fn() => view('extras.covenant-hour'))->name('covenant-hour');
Route::get('/gallery', fn() => view('extras.gallery'))->name('gallery');
Route::get('/bookstore', fn() => view('extras.bookstore'))->name('bookstore');
Route::get('/wofbi-form', fn() => view('extras.wofbi-form'))->name('wofbi.form');
Route::get('/prophetic-focus', fn() => view('extras.prophetic-focus'))->name('prophetic.focus');
Route::get('/testimony', fn() => view('extras.testimony'))->name('testimony');
Route::get('/pastoral-appointment', fn() => view('extras.pastoral-appointment'))->name('pastoral.appointment');
