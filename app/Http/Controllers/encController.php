<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EncModel;

class encController extends Controller
{
    public function insert(Request $request)
    {

        $test = new EncModel;
        $test->name = $request->name;
        // dd($test);
        $test->save();
        return redirect('/encview');

    }
}
