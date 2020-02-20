<?php

$moduleName = basename(dirname(__DIR__, 1));

Route::namespace(buildControllerNamespace($moduleName))->middleware(['customer'])->group(function () use ($moduleName) {
    Route::prefix(buildRoutePrefix($moduleName))->namespace('BackEnd')->group(function () {
        require 'backend.php';
    });
    Route::prefix(buildRoutePrefix($moduleName, 'frontend'))->namespace('FrontEnd')->group(function () {
        require 'frontend.php';
    });
});
