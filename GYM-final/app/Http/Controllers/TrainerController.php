<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class TrainerController extends Controller
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
        //   // Validate the incoming request
            $validatedData = $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|unique:trainers,email',
                'age' => 'required|integer|min:10|max:80',
                'address' => 'required|string|max:255',
                'work_experience' => 'required|string',
                'gender' => 'required|string',
                'traning_careers' => 'required|string',
                'mobile_phone_number' => 'required|string|max:10',
                //'land_phone_number' => 'required|string|max:10',
                'password' => 'required|string|min:8',

                
            ]);



            try{

            $trainer = Trainer::create([
                'full_name' => $validatedData['full_name'],
                'email' => $validatedData['email'],
                'age' => $validatedData['age'],
                'address' => $validatedData['address'],
                'work_experience' => $validatedData['work_experience'],
                'gender' => $validatedData['gender'],
                'traning_careers' => $validatedData['traning_careers'],
                'mobile_phone_number' => $validatedData['mobile_phone_number'],
                //'land_phone_number' => $validatedData['land_phone_number'],
                'password' =>$validatedData['password'], // Encrypt password before saving
            ]);
            Alert::success('Success', 'Message sent successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            // Display error alert
            Alert::error('Error', 'Failed to send message! YOUR MASSAGE IS SO LONG');
        }
         return redirect()->back();


            
    }


    
    public function save(Request $request){
               //   


        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:trainers,email',
            'age' => 'required|integer|min:10|max:80',
            'address' => 'required|string|max:255',
            'work_experience' => 'required|string',
            'gender' => 'required|string',
            'traning_careers' => 'required|string',
            'mobile_phone_number' => 'required|string|max:10',
            //'land_phone_number' => 'required|string|max:10',
            'password' => 'required|string|min:8',




            
        ]);



        try{

        $trainer = Trainer::create([
            'full_name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'work_experience' => $validatedData['work_experience'],
            'gender' => $validatedData['gender'],
            'traning_careers' => $validatedData['traning_careers'],
            'mobile_phone_number' => $validatedData['mobile_phone_number'],
            //'land_phone_number' => $validatedData['land_phone_number'],
            'password' =>$validatedData['password'], // Encrypt password before saving
        ]);
        Alert::success('Success', 'Message sent successfully!');
        return redirect()->back();
    } catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'Failed to send message! YOUR MASSAGE IS SO LONG');
    }
     return redirect()->back();



// back end save




        







        
    }

    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer, $id)
    {
        //

        $trainer = Trainer::find($id);
       // $membership_types = Membership_type::all();
        
        return view('file_update.trainer_update_new_popup', compact('trainer',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer, $id)
    {
        // 
       

               

       
        
       
      try{
            
            $trainer=Trainer::find($id);

            

              $trainer->update([


                'full_name' => $request->full_name,
              'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
            'work_experience' => $request->work_experience,
            'gender' => $request->gender,
            'traning_careers' => $request->traning_careers,
            'mobile_phone_number' => $request->mobile_phone_number,
            //'land_phone_number' => $validatedData['land_phone_number'],
            //'password' =>$validatedData['password'], // Encrypt password before saving
            
         ]);
         
            Alert::success('Success', 'Message sent successfully!');
        return redirect()->back();
    } catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'Failed to send message! YOUR MASSAGE IS SO LONG');
    }
     return redirect()->back();

    
    
    
        

    
       
    }






    public function approw(Trainer $trainer, $id)
    {

        $trainer = Trainer::find($id);
        return view('file_update.trainer_approw', compact('trainer'));









        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer, $id)
    {
        //
        try{
        $trainer=Trainer::find($id);

        $trainer->delete();
        

        Alert::success('Success', ' Deletel!');
        return redirect()->back();
     }catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'you are not delete! ');
        return redirect()->back();
    }

           




    }





    public function approw_trainer(Request $request, Trainer $trainer, $id)
    {   


         try{
        $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],]);
           

       


            
        $trainer = Trainer::find($id);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        // $input['role'] = "member";
        // $user = User::create($input);
        User::create([
            'name' => $input['name'],
            'role' => "trainer",
            'password' =>  $input['password'],
            'email' =>  $input['email'],
            'trainer_id' =>  $input['new_userid'],
        ]);
        Alert::success('Success', 'approw  you are trainer in titan fitness center!');
        //return view('file_update.member_aprow_popup', compact('member'));
    } catch (\Exception $e) {
        // Display error alert
        Alert::error('Error', 'yoy alredy trainer');
    }
    return redirect()->back();




        





        
    }
}