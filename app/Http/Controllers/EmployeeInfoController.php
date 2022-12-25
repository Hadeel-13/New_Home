<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeInfo;
class EmployeeInfoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Employee_Infos = EmployeeInfo::latest()->paginate(5);
      
        // return view('Employee_Infos.index',compact('Employee_Infos'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee_Infos.create');
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
      
        EmployeeInfo::create($request->all());
       
        return redirect()->route('Employee_Infos.index')
                        ->with('success','EmployeeInfo created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeInfo  $EmployeeInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeInfo $EmployeeInfo)
    {
        return view('Employee_Infos.show',compact('EmployeeInfo'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeInfo  $EmployeeInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeInfo $EmployeeInfo)
    {
        return view('Employee_Infos.edit',compact('EmployeeInfo'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeInfo  $EmployeeInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeInfo $EmployeeInfo)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $EmployeeInfo->update($request->all());
      
        return redirect()->route('Employee_Infos.index')
                        ->with('success','EmployeeInfo updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeInfo  $EmployeeInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeInfo $EmployeeInfo)
    {
        $EmployeeInfo->delete();
       
        return redirect()->route('Employee_Infos.index')
                        ->with('success','EmployeeInfo deleted successfully');
    }
}
