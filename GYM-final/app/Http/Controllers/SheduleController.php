<?php

namespace App\Http\Controllers;

use App\Models\Shedule;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_; 
use App\Models\Member;
use RealRashid\SweetAlert\Facades\Alert;



class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Member::all();
        $shedules = Shedule::all();
        return view('dashbord.trainer_shedul_create', compact('members','shedules'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //

        $member = Member::find($id);
        return view('file_update.shedul_create', compact('member'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Shedule::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Shedule $shedule, $id)
    {
        //
      
        $shedule=Shedule::find($id);
        // dd($shedule);
         return view('file_update.member _view', compact('shedule'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shedule $shedule, $id)
    {
        //
        $shedule=Shedule::find($id);
        // dd($shedule);
         return view('file_update.shedule_view', compact('shedule'));
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shedule $shedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shedule $shedule, $id)
    {
        //


        try {
            $shedule = Shedule::find($id);

            $shedule->delete();

            Alert::success('Success', ' Deletel!');
            return redirect()->back();
        } catch (\Exception $e) {
            // Display error alert
            Alert::error('Error', 'you are not delete! ');
            return redirect()->back();
        }

    }
}