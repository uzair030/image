<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    public function index(){
        $pictures = Gallery::all();
        return view('picture.index',compact('pictures'));
    }

    public function create(){
        return view('picture.create');
    }

    public function store(Request $request) {
        $picture = new Gallery;
        $picture->name = $request->name;
        $picture->email = $request->email;
        $picture->image = $request->image;
        $picture->save();
        $saved = $picture->save();
        return redirect()->route('picture.index');

}

    
        public function delete($id){
        $picture = Gallery::find($id);
        $deleted = $picture->delete();
        return redirect()->route('picture.index');
}

    public function edit($id){
        $picture = Gallery::find($id);
        // dd($todo);
        return view('picture.edit', compact('picture'));


    }

    public function update(Request $request, $id){

        $picture = Gallery::find($id);
        $picture->name = $request->name;
        $picture->email = $request->email;
        $picture->image = $request->image;
        $saved = $picture->save();
        return redirect()->route('picture.index');
    }

}