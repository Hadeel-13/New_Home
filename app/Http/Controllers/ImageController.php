<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Images = Image::latest()->paginate(5);
      
        return view('Images.index',compact('Images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Images.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        Image::create($request->all());
       
        return redirect()->route('Images.index')
                        ->with('success','Image created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $Image)
    {
        return view('Images.show',compact('Image'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $Image)
    {
        return view('Images.edit',compact('Image'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $Image)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $Image->update($request->all());
      
        return redirect()->route('Images.index')
                        ->with('success','Image updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $Image)
    {
        $Image->delete();
       
        return redirect()->route('Images.index')
                        ->with('success','Image deleted successfully');
    }
}
