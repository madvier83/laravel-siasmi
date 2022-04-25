<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index',[
            'title' => 'Gallery',
            'images' => Images::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create',[
            'title' => 'Gallery / Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required|image|file|max:5000',
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('gallery-img');
        }

        Images::create($data);
        return redirect('/admin-gallery')->with('create', 'The image is successfully stored :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.gallery.edit', [
            'title' => 'Gallery / Update',
            'image' => Images::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:5000',
        ]);
        
        if($request->file('image')){
            Storage::delete($request->oldImage);
            $data['image'] = $request->file('image')->store('news-img');
        }else{
            $data['image'] = $request->oldImage;
        }

        Images::where('id', $id)->update($data);
        return redirect('/admin-gallery')->with('update', 'The image is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Storage::delete(Images::where('id', $id)->first()->image);
        Images::destroy($id);

        return redirect('/admin-gallery')->with('delete', 'Image deleted');
    }
}
