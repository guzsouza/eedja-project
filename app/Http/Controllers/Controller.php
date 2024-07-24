<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;

class Controller{
    public function teste(){

        dd(Auth::user());
        Teacher::read();
    }
}
