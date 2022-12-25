<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saved_Post;
class SavedPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Saved_Posts = Saved_Post::latest()->paginate(5);
      
        return view('Saved_Posts.index',compact('Saved_Posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Saved_Posts.create');
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
      
        Saved_Post::create($request->all());
       
        return redirect()->route('Saved_Posts.index')
                        ->with('success','Saved_Post created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saved_Post  $Saved_Post
     * @return \Illuminate\Http\Response
     */
    public function show(Saved_Post $Saved_Post)
    {
        return view('Saved_Posts.show',compact('Saved_Post'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saved_Post  $Saved_Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Saved_Post $Saved_Post)
    {
        return view('Saved_Posts.edit',compact('Saved_Post'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saved_Post  $Saved_Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saved_Post $Saved_Post)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $Saved_Post->update($request->all());
      
        return redirect()->route('Saved_Posts.index')
                        ->with('success','Saved_Post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saved_Post  $Saved_Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saved_Post $Saved_Post)
    {
        $Saved_Post->delete();
       
        return redirect()->route('Saved_Posts.index')
                        ->with('success','Saved_Post deleted successfully');
    }
}
