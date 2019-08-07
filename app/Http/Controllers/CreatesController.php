<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Input;


class CreatesController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        //print_r($articles);
        return view('home', ['articles' => $articles]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png,GIF'
        ]);

        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $fileName = time() . $file->getClientOriginalName();
            $destinationPath = 'uploads';
            $file->move($destinationPath, $fileName);
            $articles->image = $fileName;
        }
        $articles->save();
        return redirect('/')->with('info', 'Article Saved Successfully');
    }

    public function update($id)
    {
        $articles = Article::find($id);
        return view('/update', ['articles' => $articles]);
    }
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        Article::where('id', $id)->update($data);

        return redirect('/')->with('info', 'Article Updated Successfully');
    }

    public function read($id)
    {
        $articles = Article::find($id);
        return view('/read', ['articles' => $articles]);
    }

    public function delete($id)
    {
        Article::where('id', $id)->delete();

        return redirect('/')->with('info', 'Article Deleted Successfully');
    }
}
