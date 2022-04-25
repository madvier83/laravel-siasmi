<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.section.index',[
            'title' => 'Section / Section List',
            'section' => Section::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $section = Section::where('name', $id)->first();
        if($section->type == 'contact'){
            return view('admin.section.editContact',[
                'title' => 'Section / '.$section->name,
                'section' => $section,
            ]);
        } else {
            return view('admin.section.edit',[
                'title' => 'Section / '.$section->name,
                'section' => $section,
            ]);
        }
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
            'image' => '',
            'body' => 'required',
        ]);

        if($request->file('image')){
            Storage::delete($request->oldImage);
            $data['image'] = $request->file('image')->store('section-img');
        }else{
            $data['image'] = $request->oldImage;
        }

        Section::where('id',$id)->update($data);
        return redirect('/admin-section')->with('update', 'Section updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
