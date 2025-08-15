<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::get('/docs-package', function () {
    return view('docs-package');
})->name('docs-package');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/imprint', function () {
    return view('imprint');
})->name('imprint');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/demo', function () {
    return view('demo');
})->name('demo');

Route::get('/pro', function () {
    return view('pro');
})->name('pro');

Route::get('/license', function () {
    return view('license');
})->name('license');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/bundles/content', function () {
    return view('bundles.content');
})->name('bundles.content');

Route::get('/bundles/commerce', function () {
    return view('bundles.commerce');
})->name('bundles.commerce');

Route::get('/bundles/devops', function () {
    return view('bundles.devops');
})->name('bundles.devops');

Route::get('/bundles/press', function () {
    return view('bundles.press');
})->name('bundles.press');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/banner', function () {
    return view('banner');
})->name('banner');

Route::get('/bannergenerator/preview',
    [App\Http\Controllers\BannerGeneratorController::class, 'preview',
    ])->name('bannergenerator.preview');

Route::get('/bannergenerator',
    [App\Http\Controllers\BannerGeneratorController::class, 'generate',
    ])->name('bannergenerator');

Route::get('/help-moox', function () {
    return view('help-moox');
})->name('help-moox');

Route::get('/docs-installation', function () {
    return redirect('https://github.com/mooxphp/moox#installation');
})->name('docs-installation');
