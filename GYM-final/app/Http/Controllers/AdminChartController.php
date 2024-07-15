<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminChartController extends Controller
{
    public function index()
    {
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

       











        $trainer_chartData = [
            'labels' => ['members', 'trainers', 'March', 'April', 'May', 'June', 'July', 'August', ''],
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
        $trainer_chartData = json_encode($trainer_chartData);
    
        // Pass both chart data to the view
        return view('dashbord.admin-userdata', compact('chartData', 'trainer_chartData'));

        
    }
    
}