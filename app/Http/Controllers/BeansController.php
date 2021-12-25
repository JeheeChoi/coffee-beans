<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Coffee-Beans-dedicated data fetch controller
class BeansController extends Controller
{
    public function list()
    {
        $beans = [
            'casi cielo',
            'algo mas',
            'cafe',
            'J'
        ];


        return view('beans', [
            'beans' => $beans,
        ]);
    }
}
