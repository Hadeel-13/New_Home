<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
class ReportController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Reports = Report::latest()->paginate(5);
      
        return view('Reports.index',compact('Reports'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reports.create');
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
            'email' => 'required',
            'content' => 'required',
        ]);
      
        Report::create($request->all());
       
        return response()->json()
                        ->with('success','Report created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $Report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $Report)
    {
        return view('Reports.show',compact('Report'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $Report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $Report)
    {
        return view('Reports.edit',compact('Report'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $Report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $Report)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $Report->update($request->all());
      
        return redirect()->route('Reports.index')
                        ->with('success','Report updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $Report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $Report)
    {
        $Report->delete();
       
        return redirect()->route('Reports.index')
                        ->with('success','Report deleted successfully');
    }
}
