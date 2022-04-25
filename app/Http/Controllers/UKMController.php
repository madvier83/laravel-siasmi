<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
use Illuminate\Support\Facades\Storage;

class UKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ukm.index',[
            'title' => 'UKM',
            'ukms' => Ukm::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ukm.create',[
            'title' => 'UKM / Create',
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
            $data['image'] = $request->file('image')->store('ukm-img');
        }

        Ukm::create($data);
        return redirect('/admin-ukm')->with('create', 'Data added');
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
        return view('admin.ukm.edit',[
            'title' => 'UKM / Update',
            'ukm' => Ukm::where('id',$id)->first()
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
            $data['image'] = $request->file('image')->store('ukm-img');
        }else{
            $data['image'] = $request->oldImage;
        }

        Ukm::where('id', $id)->update($data);
        return redirect('/admin-ukm')->with('update', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Storage::delete(Ukm::where('id', $id)->first()->image);
        Ukm::destroy($id);

        return redirect('/admin-ukm')->with('delete', 'Data deleted');
    }
}
