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
        // input value 'name' is required in order to POST a new CoffeeBean
        $data = request()->validate([
            'name' => 'required',
            'caffeine_level' => 'required',
            'cost' => 'required|numeric',
            'bean_type' => 'required',
            'roast' => 'required',
            'grind' => 'required',
            'country_of_origin' => 'required'
        ]);

        // dd(request('name'));
        $CoffeeBean = new CoffeeBean();
        $CoffeeBean->name = request('name');
        $CoffeeBean->caffeine_level = request('caffeine_level');
        $CoffeeBean->cost = request('cost');
        $CoffeeBean->bean_type = request('bean_type');
        $CoffeeBean->roast = request('roast');
        $CoffeeBean->grind = request('grind');
        $CoffeeBean->country_of_origin = request('country_of_origin');

        $CoffeeBean->save();

        return back();

    }

// GET SINGLE COFFEE BEAN WITH ID TO EDIT
    public function edit(CoffeeBean $beans)
    {
        return view('edit', [
            'beans' => $beans,
        ]);
    }

    // UPDATE COFFEE BEAN
    public function update(CoffeeBean $beans)
    {
        // dd(request()->all());

        request()->validate([
            'name' => 'required',
            'caffeine_level' => 'required',
            'cost' => 'required|numeric',
            'bean_type' => 'required',
            'roast' => 'required',
            'grind' => 'required',
            'country_of_origin' => 'required'
        ]);

        $beans->update([
            'name' => request('name'),
            'caffeine_level' => request('caffeine_level'),
            'cost' => request('cost'),
            'bean_type' => request('bean_type'),
            'roast' => request('roast'),
            'grind' => request('grind'),
            'country_of_origin' => request('country_of_origin')
        ]);

        return redirect('/');
    }

}
