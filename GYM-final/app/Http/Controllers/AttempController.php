<?php

namespace App\Http\Controllers;

use App\Models\Attemp;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AttempController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //



        
        $validated = $request->validate([
            'day' => 'required|string|max:55',
            // 'email' => 'required|email|max:255',
           
             
         ]);
         $input = $request->all();
           
          try{
         
             $attemp = Attemp::create([
                 'day' => $input['day'],
                 'member_id' =>$input['member_id'],
                 //'massage' => $validated['massage'],
                 
                 
             ]);
             Alert::success('Success', 'mark attendence!');
             return redirect()->back();
         } catch (\Exception $e) {
             // Display error alert
             Alert::error('Error', 'Failed');
         }
          return redirect()->back();
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Attemp $attemp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attemp $attemp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attemp $attemp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attemp $attemp)
    {
        //
    }
}