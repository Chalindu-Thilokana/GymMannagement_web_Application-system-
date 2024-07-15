<?php

namespace App\Http\Controllers;

//use App\Models;
use App\Models\Attendence;
use Illuminate\Http\Request;
use app\Models\User;
use  App\Models\Member;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Membership_type;



class AttendenceController extends Controller
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
          // 'name' => 'required|string|max:55',
           // 'email' => 'required|email|max:255',
          
            
        ]);
        $input = $request->all();
          
         try{
        
            $attendence = Attendence::create([
                'day' => $input['day'],
                'member_id' =>$input['member_id'],
                //'name' =>$input['name'],
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
    public function show(Attendence $attendence,)
    {
        //
        $chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July','august','septhember','octomber','november','december',],
            'datasets' => [
                [
                    'label' => 'Attendece',
                    'backgroundColor' => 'rgba(90, 142, 182, 0.2)',
                    'borderColor' => 'rgba(90, 142, 12, 1)',
                    'borderWidth' => 1,
                    'data' => [65.5, 59, 80, 81, 56, 55, 40],
                ]
            ],
        ];
         $chartData = json_encode($chartData);

        
                 $attendences=Attendence::all();
                 $member=Member::all();
                 
                 
                 $membership_types = Membership_type::all();
                
        return view('dashbord.admin-shedul-attendence', compact('chartData', 'attendences','member','membership_types',));
    }
   
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendence $attendence,$id)
    {
        //
        try{
         $attendence=Attendence::find($id);

         $attendence->delete();
       // return redirect()->back();

        Alert::success('Success', 'delete attendence!');
        return redirect()->back();
    } catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'Failed');
    }
     return redirect()->back();
    }
}