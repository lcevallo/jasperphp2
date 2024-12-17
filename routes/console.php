<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command("jasper:build {file?}",function($file = ""){
    $this->comment(App\Http\Controllers\JasperController::UpdateReports($file));
});
Artisan::command("jasper:test",function(){
    $this->comment(App\Http\Controllers\JasperController::console());
});
