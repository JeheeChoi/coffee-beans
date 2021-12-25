<?php

namespace App\Http\Controllers;
use App\Models\CoffeeBean;

use Illuminate\Http\Request;

// Coffee-Beans-dedicated data fetch controller
class BeansController extends Controller
{
// INDEX COFFEE BEANS
    public function list()
    {
        $beans = CoffeeBean::all();

        // dd($beans);

        return view('beans', [
            'beans' => $beans,
        ]);
    }

// POST AND UPDATE INDEX COFFEE BEANS
    public function store()
    {
        // dd(request('name'));
        $CoffeeBean = new CoffeeBean();
        $CoffeeBean->name = request('name');
        $CoffeeBean->save();

        return back();

    }
}
