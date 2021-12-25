<?php

namespace App\Http\Controllers;
use App\Models\CoffeeBean;

use Illuminate\Http\Request;

// Coffee-Beans-dedicated data fetch controller
class BeansController extends Controller
{
    public function list()
    {
        $beans = CoffeeBean::all();

        // dd($beans);

        return view('beans', [
            'beans' => $beans,
        ]);
    }
}
