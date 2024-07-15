<?php

namespace App\Http\Controllers;
use app\Models;
use App\Models\Member;

use App\Models\Massage;
use App\Models\Trainer;
use App\Models\Membership_type;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MassageController extends Controller
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
        //   // Define validation rules
    $validated = $request->validate([
        'name' => 'required|string|max:55',
        'email' => 'required|email|max:255',
        'massage' => 'required|string|max:20',
    ]);


    try {
        $massage = Massage::create([
            'name' => $validated['name'],
            'massage' => $validated['massage'],
            'email' => $validated['email'],
            
        ]);

        // Display success alert
        Alert::success('Success', 'Message sent successfully!');
    } catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'Failed to send message! YOUR MASSAGE IS SO LONG');
    }



    

    return redirect()->back();



     
    }

    /**
     * Display the specified resource.
     */
    public function show(Massage $massage, Member $member,Trainer $trainer)
    {           $massages=Massage::all();
                 $members=Member::all(); 

                 
                 $trainers=Trainer::all();
        
        //
        $chartData = [
            'labels' => ['members', 'trainers', ],
            'datasets' => [
                [
                    'label' => 'BMI',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65.5, 59, ],
                ]
            ],
        ];
         $chartData = json_encode($chartData);

         //dd($massages);

        $member_types = Membership_type::all();
         return view('dashbord.admin-userdata', compact('chartData', 'massages','members','trainers','member_types'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Massage $massage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Massage $massage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Massage $massage, $id)
    {
        //
        $massage=Massage::find($id);

         $massage->delete();
        return redirect()->back();
    }
}