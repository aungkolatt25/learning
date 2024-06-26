<?php

use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\VocabularyController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name("admin.")->group(function () {
    Route::resource('language', LanguageController::class);
    Route::get('language/{language}/vocabulary/{vocabulary}', [LanguageController::class, 'process'])->name('vocabulary.process');

    Route::resource('vocabulary', VocabularyController::class);

    Route::resource('pattern', LanguageController::class);
});
