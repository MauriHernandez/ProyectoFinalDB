<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    
    public function createBackup()
    {
        Artisan::call('backup:run');
        return redirect()->back();
    }
    


}
