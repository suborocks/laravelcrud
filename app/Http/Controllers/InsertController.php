<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Controllers\TestController;

use App\User;

class InsertController extends Controller


{
    use TestController;
    public function insert(Request $request)
    {

        $test = new User;
        $test->title = $request->name;
        $test->slug = $this->slug($request->name);
        dd($test);
        $test->save;
    }
}
