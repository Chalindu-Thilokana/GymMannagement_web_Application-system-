<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AdminChartController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipTypeController;
use app\Http\Controllers\MemberspakageController;
use PHPUnit\TextUI\ShellExitCodeCalculator;
use App\Http\Controllers\PaymentController;

//use App\Models\Membership_type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [MembershipTypeController::class, 'show'])->name('index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');


    Route::get('pay', function () {
        return view('dashbord.trainer-payment');
    });

    Route::get('/dashboard', function () {
        return view('dashbord.gym-user-profile');
    })->name('dashboard');


    //member tabele approw

    Route::any('/member_edit/{id}', [MemberController::class, 'edit'])->name('member_edit');

    Route::any('/member_aprove/{id}', [MemberController::class, 'member_aprove'])->name('member_aprove');


    //member tabele update

    Route::any('/member_updatecompact/{id}', [MemberController::class, 'updatecompact'])->name('updatecompact');
    Route::any('/member_update/{id}', [MemberController::class, 'update'])->name('member_update');
    Route::delete('/member_delete/{id}', [MemberController::class, 'destroy'])->name('member_delete');


    //weghti height update user
    Route::post('/mem_detail_update/{id}', [MemberController::class, 'detail_updata'])->name('mem_detail_update');

    ///membership type update add delete function
    Route::post('/member_type', [MembershipTypeController::class, 'store'])->name('member_type');
    Route::delete('/pakage_delete/{id}', [MembershipTypeController::class, 'destroy'])->name('pakage_delete');
    Route::any('/pakage_edit/{id}', [MembershipTypeController::class, 'edit'])->name('pakage_edit');
    Route::any('/pakage_update/{id}', [MembershipTypeController::class, 'update'])->name('pakage_update');


    Route::get('/paym', [MemberController::class, 'create'])->name('paym');
    Route::get('/pay_getin{id}', [MemberController::class, 'index'])->name('pay_getin');///
    Route::post('/pay_save', [PaymentController::class, 'store'])->name('pay_save');///
    


    Route::get('/member_shedul_update', function () {
        return view('file_update.shedule-update');
    
    });
    
    Route::get('/member_shedul_view', function () {
        return view('file_update.shedule-view');
    
    });
    
    Route::get('/trainer_update_', function () {
        return view('file_update.trainer_update_new_popup');
    
    });
    // Route::get('pro', function () {
    //     return view('dashbord.gym-user-profile');





    
//user dashord
Route::get('/chart/{id}', [MemberController::class, 'show'])->name('chart');//id kiyana eka passe damme 

//attendece mark
Route::any('/attendence_mark', [AttendenceController::class, 'store'])->name('attendence_mark');
Route::delete('/attendence_delete/{id}', [AttendenceController::class, 'destroy'])->name('attendence_delete');


//////////

//trainer shedul create
Route::get('/shedule', [SheduleController::class, 'index'])->name('shedule');
Route::any('/shedule_create/{id}', [SheduleController::class, 'create'])->name('shedule_edit');
Route::any('/shedule_save', [SheduleController::class, 'store'])->name('shedule_store');
Route::any('/shedule_delete/{id}', [SheduleController::class, 'destroy'])->name('shedule_delete');//

//Route::any('/shedule_create/{id}', [SheduleController::class, 'create'])->name('shedule_edit');




//admin attendence and shedule
Route::get('/attendence', [AttendenceController::class, 'show'])->name('attendence');




//massage routes

Route::delete('/massage_delete/{id}', [MassageController::class, 'destroy'])->name('massage_delete');

//addmin dashbord
Route::get('/admin_show', [MassageController::class, 'show'])->name('admin_show');
//front end register


Route::post('/member_reg_admin', [MemberController::class, 'save'])->name('member_reg_admin');

//trainer register

//back end trainer back end
Route::post('/trainer_reg_admin', [TrainerController::class, 'save'])->name('trainer_reg_admin');

//trainer update 
Route::any('/trainer_edit/{id}', [TrainerController::class, 'edit'])->name('trainer_edit');
Route::any('/trainer_update/{id}', [TrainerController::class, 'update'])->name('trainer_update_data');
Route::delete('/trainer_delete/{id}', [TrainerController::class, 'destroy'])->name('trainer_delete');

// trainer approw

Route::get('/trainer_appro/{id}', [TrainerController::class, 'approw'])->name('trainer_appro');
Route::post('/approw_trainer/{id}', [TrainerController::class, 'approw_trainer'])->name('approw_trainer');


//shedul view trainer
Route::get('/shedul_view_trainer/{id}', [SheduleController::class, 'edit'])->name('shedul_view');
Route::get('/shedul_view_memeber/{id}', [SheduleController::class, 'show'])->name('shedul_view_memeber');
    // });




//Route::get('paym', function () {
  //  return view('dashbord.member-payment-show');
//});

//Route::get('/index', function () {
//  return view('index');
//});

//update
//Route::get('/approw', function () {
//   return view('file_update.member_aprow_popup');
//});


//Route::get('/member_update', function () {
//  return view('file_update.member_update_new_popup');
//});


});

////member register front end
Route::post('/member_reg', [MemberController::class, 'store'])->name('member_reg');
Route::post('/trainer_reg', [TrainerController::class, 'store'])->name('trainer_reg');
Route::post('/massage_save', [MassageController::class, 'store'])->name('massage_save');