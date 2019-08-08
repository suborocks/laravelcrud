<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EncModel;

class encController extends Controller
{

    public function insert(EncModel $p)
    {

        // $test = new EncModel;
        // $test->name = $request->name;
        // // dd($test);
        // $test->save();
        
    	$t = request()->validate(['name'=>"required"]);
    	$p->encap($t);

        return redirect('/encview');

    }

    public function read()
    {
        $data = EncModel::all();
        return view('encview', compact('data'));
    }

     public function edit($id,EncModel $p)
    {
        $data = $p->encedit($id);
       return view('encedit',compact('data'));
    }

    public function update(EncModel $r,$id)
    {
        $t = request()->validate(['name'=>"required"]);
        $r->encapupdate($t,$id);
        return redirect('/encview');
    }


   
     
     public function delete($id)
    {
        EncModel::where('id', $id)->delete();

        return redirect('/encview');
    }

}
