<?php 
Route::get('demo/test', function () {
    return 'Test';
});

Route::get('demo/hello', function () {
    return Pameunteu::hello();
});