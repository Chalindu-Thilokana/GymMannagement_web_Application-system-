<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;// app/Http/Controllers/ChartController.php
//use app\Models\Member;

//namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use app\Models\User;

class ChartController extends Controller
{
    public function index()
    {
        $chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July','august','',],
            'datasets' => [
                [
                    'label' => 'BMI',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65.5, 59, 80, 81, 56, 55, 40],
                ]
            ],
        ];
         $chartData = json_encode($chartData);

         //$user= User::find($id);
         $users= User::all();

        return view('dashbord.profile-detail-edit' , compact('chartData'));
    }





   
}