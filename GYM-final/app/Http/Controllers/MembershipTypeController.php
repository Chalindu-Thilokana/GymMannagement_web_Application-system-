<?php

namespace App\Http\Controllers;

use App\Models\Membership_type;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use RealRashid\SweetAlert\Facades\Alert;

class MembershipTypeController extends Controller
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
    public function store(Request $request, Membership_type $membership_type)
    {

        $validated = $request->validate([
            'price' => 'required|numeric|min:0',
            'membership_type' => 'required|string|max:55',
             'facilities' => 'required|string|max:55',
             'trainers'=>'required|string|max:55',
                 
         ]);
         $input = $request->all();
           
          try{
         
            $membership_type = Membership_type::create([
                 'price' => $input['price'],
                 'membership_type' =>$input['membership_type'],
                 'facilities' =>$input['facilities'],
                 'trainers' =>$input['trainers'],
                 //'massage' => $validated['massage'],
                 
                 
             ]);
             Alert::success('created', 'create membership type!');
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
    public function show(Membership_type $membership_type)
    {
        $membership_types = Membership_type::all();
        return view('index', compact('membership_types'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership_type $membership_type,$id)
    {
        //
        $membership_type=Membership_type::find($id);
        return view('file_update.membership_type _update', compact('membership_type'));
        

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership_type $membership_type, $id)
    {
        //




        $validated = $request->validate([
            'price' => 'required|numeric|min:0',
            'membership_type' => 'required|string|max:55',
             'facilities' => 'required|string|max:55',
             'trainers'=>'required|string|max:55',
           
             
         ]);
         $input = $request->all();
           
          try{
           
            $membership_type = Membership_type::find($id);

              
         
            $membership_type->update([
                 'price' => $input['price'],
                 'membership_type' =>$input['membership_type'],
                 'facilities' =>$input['facilities'],
                 'trainers' =>$input['trainers'],
                 //'massage' => $validated['massage'],
                 
                 
             ]);
             Alert::success('updateed', 'create membership type!');
             return redirect()->back();
         } catch (\Exception $e) {
             // Display error alert
             Alert::error('Error', 'Failed');
         }
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membership_type $membership_type, $id)
    {
            try{
        $membership_type=Membership_type::find($id);
        
        $membership_type->delete();
        
        Alert::success('Success', ' Delete!');
        return redirect()->back();
     }catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'you are not delete! ');
        return redirect()->back();
    }

        
    }
}