<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use App\Models\Attendence;
use App\Models\Shedule;

//use app\Models\Membership_type;
use Illuminate\Http\Request;
//use Hash;
use App\Mail\MemberApproved;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\Payment;

//use Auth;
//use Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //


        $member= Member:: find($id);
       
        
        return view('file_update.member-pay-popup', compact('member',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $payments=Payment::all();
        
       $members= Member:: all();
       return view('dashbord.member-payment-show', compact('members','payments',));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        // dd($request);

    // Validate the request data
    $validatedData = $request->validate([
        'full_name' => 'required|string',
        'age' => 'required|integer',
        'email' => 'required|email|unique:members,email',
        'gender' => 'required', // Adjust values as needed
        'address' => 'required|string',
        'weight' => 'required|numeric',
        'height' => 'required|numeric',
        'mobile_phone_number' => 'required|string',
        'membership_type_id' => 'nullable|string',

        //'land_phone_number' => 'nullable|string',
        'password' => 'required|string', // You should hash the password before saving
        'perpose' => 'required|string',
    ]);

    // Calculate BMI
    $weight = $validatedData['weight'];
    $height = $validatedData['height'] / 100; // Convert height from cm to meters
    $bmi = $weight / ($height * $height);


    try{
    // Create a new member instance and save the data
    $member = Member::create([
        'full_name' => $validatedData['full_name'],
        'age' => $validatedData['age'],
        'email' => $validatedData['email'],
        'gender' => $validatedData['gender'],
        'address' => $validatedData['address'],
        'weight' => $validatedData['weight'],
        'height' => $validatedData['height'],
        'mobile_phone_number' => $validatedData['mobile_phone_number'],
        'membership_type_id' => $validatedData['membership_type_id'],

        //'land_phone_number' => $validatedData['land_phone_number'],
        'password' => $validatedData['password'], // Encrypt the password before saving
        'BMI' => $bmi,
        'perpose' => $validatedData['perpose'],
    ]);



    Alert::success('Success', 'Message sent successfully!');
    return redirect()->back();
} catch (\Exception $e) {
    // Display error alert
    Alert::error('Error', 'you are alredy asigen! ');
    return redirect()->back();
}
 


    }


    public function save(Request $request)
    {





        // Validate the request data
      /*  $validatedData = $request->validate([
            'full_name' => 'required|string',
            'age' => 'required|integer',
            'email' => 'required|email|unique:members,email',
            'gender' => 'required', // Adjust values as needed
            'address' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'mobile_phone_number' => 'required|string',
            //'membership_type_id' => 'nullable',
            'password' => 'required|string', // You should hash the password before saving
            'perpose' => 'required|string',
        ]);

        // Calculate BMI
        $weight = $validatedData['weight'];
        $height = $validatedData['height'] / 100; // Convert height from cm to meters
        $bmi = $weight / ($height * $height);


        
            // Create a new member instance and save the data
            $member = Member::create([
                'full_name' => $validatedData['full_name'],
                'age' => $validatedData['age'],
                'email' => $validatedData['email'],
                'gender' => $validatedData['gender'],
                'address' => $validatedData['address'],
                'weight' => $validatedData['weight'],
                'height' => $validatedData['height'],
                'mobile_phone_number' => $validatedData['mobile_phone_number'],
               // 'membership_type_id' => $validatedData['membership_type_id'],
                'password' => $validatedData['password'], // Encrypt the password before saving
                'BMI' => $bmi,
                'perpose' => $validatedData['perpose'],
            ]);



           // Alert::success('Success', 'register successfully!');
           // return redirect()->back();
        
            // Display error alert
           // Alert::error('Error', 'you can not Register! ');
            //return redirect()->back();
        */



     


              // Validate the request data
    $validatedData = $request->validate([
        'full_name' => 'required|string',
        'age' => 'required|integer',
        'email' => 'required|email|unique:members,email',
        'gender' => 'required', // Adjust values as needed
        'address' => 'required|string',
        'weight' => 'required|numeric',
        'height' => 'required|numeric',
        'mobile_phone_number' => 'required|string',
       'membership_type_id' => 'nullable|string',
        'password' => 'required|string', // You should hash the password before saving
        'perpose' => 'required|string',
    ]);

    // Calculate BMI
    $weight = $validatedData['weight'];
    $height = $validatedData['height'] / 100; // Convert height from cm to meters
    $bmi = $weight / ($height * $height);
    


    try{
    // Create a new member instance and save the data
    $member = Member::create([
        'full_name' => $validatedData['full_name'],
        'age' => $validatedData['age'],
        'email' => $validatedData['email'],
        'gender' => $validatedData['gender'],
        'address' => $validatedData['address'],
        'weight' => $validatedData['weight'],
        'height' => $validatedData['height'],
        'mobile_phone_number' => $validatedData['mobile_phone_number'],
        'membership_type_id' => $validatedData['membership_type_id'],
        'password' => $validatedData['password'], // Encrypt the password before saving
        'BMI' => $bmi,
        'perpose' => $validatedData['perpose'],
    ]);



              Alert::success('Success', 'register successfully!');
               return redirect()->back();
            } catch (\Exception $e) {
    // Display error alert
                Alert::error('Error', 'you can not Register! ');
                 return redirect()->back();
                 }
 



        



    }
    public function show(Member $member, User $user, $id)
    {
        //


        // $shedules = Shedule::all($id);

        // foreach ($shedules as $shedule) {
        //    
        // Retrieve all schedules for the given member id
        $shedules = Shedule::where('member_id', $id)->get();

        $labels = [];
        $data = [];

        foreach ($shedules as $shedule) {
            $labels[] = $shedule->created_at->format('Y-m-d');  // Format the date as needed
            $data[] = $shedule->bmi;
        }

        // Prepare chart data
        $chartData = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'user count',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => $data,
                ]
            ],
        ];

        // Encode chart data to JSON
        $chartData = json_encode($chartData);

        // Retrieve member details
        $member = Member::find($id);

        // Retrieve all schedules
        $shedules = Shedule::all();

        // Return the view with the necessary data
        return view('dashbord.profile-detail-edit', compact('chartData', 'member', 'shedules'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member, Trainer $trainer, $id)
    {
        $member = Member::find($id);
        $trainers = Trainer::all();
        return view('file_update.member_aprow_popup', compact('member', 'trainers'));
    }



    public function updatecompact(Member $member, $id)
    {//update for
        $member = Member::find($id);
        // $membership_types = Membership_type::all();

        return view('file_update.member_update_new_popup', compact('member', ));
    }

    public function member_aprove(Member $member, $id, Request $request)
    {
        try {
            $request->validate([
                'email' => ['required', 'email', Rule::unique('users', 'email')],
            ]);
            //'trainer_id' => ['required', 'exists:trainers,id'],






            $member = Member::find($id);
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            // $input['role'] = "member";
            // $user = User::create($input);
            User::create([
                'name' => $input['name'],
                'role' => "member",
                'password' => $input['password'],
                'email' => $input['email'],
                'member_id' => $input['new_userid'],
            ]);


            $member->trainer_id = $input['trainer_id'];
            $member->save();
            Alert::success('Success', 'approw  membership!');
            //return view('file_update.member_aprow_popup', compact('member'));
        } catch (\Exception $e) {
            // Display error alert
            Alert::error('Error', 'yoy alredy asigen');
        }
        return redirect()->back();





        // $user = User::create($input);
        //Mail::to($input['email'])->send(new MemberApproved($member));
        //Mail::to($input['email'])->send(new MemberApproved($member));

    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member, $id)
    {
        //
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'age' => 'required|integer',
            'email' => 'required|:email',
            'gender' => 'required', // Adjust values as needed
            'address' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'mobile_phone_number' => 'required|string',
            //'land_phone_number' => 'nullable|string',
            // 'password' => 'required|string', // You should hash the password before saving
            'perpose' => 'required|string',
        ]);

        $weight = $validatedData['weight'];
        $height = $validatedData['height'] / 100; // Convert height from cm to meters
        $bmi = $weight / ($height * $height);

        try {

            $member = Member::find($id);

            $member->update([
                'full_name' => $validatedData['full_name'],
                'age' => $validatedData['age'],
                'email' => $validatedData['email'],
                'gender' => $validatedData['gender'],
                'address' => $validatedData['address'],
                'weight' => $validatedData['weight'],
                'height' => $validatedData['height'],
                'mobile_phone_number' => $validatedData['mobile_phone_number'],
                //'land_phone_number' => $validatedData['land_phone_number'],
                // 'password' => $validatedData['password'], // Encrypt the password before saving
                'BMI' => $bmi,
                'perpose' => $validatedData['perpose'],
            ]);



            Alert::success('Success', 'update successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            // Display error alert
            Alert::error('Error', 'you are not update! ');
            return redirect()->back();
        }





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member, $id)
    {
        //
        try {
            $member = Member::find($id);

            $member->delete();

            Alert::success('Success', ' Deletel!');
            return redirect()->back();
        } catch (\Exception $e) {
            // Display error alert
            Alert::error('Error', 'you are not delete! ');
            return redirect()->back();
        }



    }





    public function detail_updata(Request $request, Member $member, $id)
    {


        try {

            $validatedData = $request->validate([

                'weight' => 'required|numeric',
                'height' => 'required|numeric',
                'age' => 'required|integer',
                //'mobile_phone_number' => 'required|string',
                //'land_phone_number' => 'nullable|string',
                // 'password' => 'required|string', // You should hash the password before saving




            ]);


            $weight = $validatedData['weight'];
            $height = $validatedData['height'] / 100; // Convert height from cm to meters
            $bmi = $weight / ($height * $height);





            $member = Member::find($id);

            $member->update([
                //'full_name' => $validatedData['full_name'],
                'age' => $validatedData['age'],
                // 'email' => $validatedData['email'],
                //  'gender' => $validatedData['gender'],
                // 'address' => $validatedData['address'],
                'weight' => $validatedData['weight'],
                'height' => $validatedData['height'],
                // 'mobile_phone_number' => $validatedData['mobile_phone_number'],
                //'land_phone_number' => $validatedData['land_phone_number'],
                // 'password' => $validatedData['password'], // Encrypt the password before saving
                'BMI' => $bmi,
                //'perpose' => $validatedData['perpose'],
            ]);
            Alert::success('Success', ' your new details updatel!');
            return redirect()->back();
        } catch (\Exception $e) {
            // Display error alert
            Alert::error('Error', 'you are not update ! ');
            return redirect()->back();
        }

















    }

    public function attendence(Request $request, Member $member, Attendence $attendence)
    {






        $chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'august', 'septhember', 'octomber', 'november', 'december',],
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


        $attendences = Attendence::all();
        $users = User::all();



        return view('dashbord.admin-shedul-attendence', compact('chartData', 'attendences', 'users'));
    }




}