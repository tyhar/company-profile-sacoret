<?php

use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

//services
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/brand-activation', [ServicesController::class, 'brandActivation']); //brand-activation
Route::get('/services/graphic-design', [ServicesController::class, 'graphicDesign']); //graphic-design
Route::get('/services/videography', [ServicesController::class, 'videography']); //videography
Route::get('/services/event-photoshoot', [ServicesController::class, 'eventPhotoshoot']); //event-photoshoot
Route::get('/services/social-media', [ServicesController::class, 'socialMedia']); //social-media-management
Route::get('/services/product-branding', [ServicesController::class, 'productBranding']); //product-branding

//Projects
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/brand-activation', [ProjectsController::class, 'brandActivation']);
Route::get('/projects/event-photoshoot', [ProjectsController::class, 'eventPhotoshoot']);
Route::get('/projects/graphic-design', [ProjectsController::class, 'graphicDesign']);
Route::get('/projects/product-branding', [ProjectsController::class, 'productBranding']);
Route::get('/projects/social-media', [ProjectsController::class, 'socialMedia']);
Route::get('/projects/videography', [ProjectsController::class, 'videography']);

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/testimonials', function () {
    return view('pages.testimonial');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/download-catalog-pdf', [FileDownloadController::class, 'downloadPDF'])->name('download.catalog.pdf');
