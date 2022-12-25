<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block_User;
class BlockUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Block_Users = Block_User::latest()->paginate(5);
      
        return view('Block_Users.index',compact('Block_Users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Block_Users.create');
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
      
        Block_User::create($request->all());
       
        return redirect()->route('Block_Users.index')
                        ->with('success','Block_User created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Block_User  $Block_User
     * @return \Illuminate\Http\Response
     */
    public function show(Block_User $Block_User)
    {
        return view('Block_Users.show',compact('Block_User'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Block_User  $Block_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Block_User $Block_User)
    {
        return view('Block_Users.edit',compact('Block_User'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Block_User  $Block_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block_User $Block_User)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $Block_User->update($request->all());
      
        return redirect()->route('Block_Users.index')
                        ->with('success','Block_User updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Block_User  $Block_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block_User $Block_User)
    {
        $Block_User->delete();
       
        return redirect()->route('Block_Users.index')
                        ->with('success','Block_User deleted successfully');
    }

}
