<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AdminStudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/course-detail/{id}',[WebController::class,'courseDetail'])->name('course.detail');
Route::get('/enroll-now/{id}',[WebController::class,'enroll'])->name('enroll.now');
Route::post('/new.enroll/{id}',[WebController::class,'newEnroll'])->name('new.enroll');

Route::get('/user-login',[AuthController::class,'login'])->name('user.login');
Route::post('/new.login',[AuthController::class,'newLogin'])->name('new.login');
Route::get('/user-register',[AuthController::class,'register'])->name('user.register');
Route::post('/user-logout',[AuthController::class,'logout'])->name('user.logout');
Route::post('/student-logout',[AuthController::class,'studentLogout'])->name('student.logout');

Route::get('/teacher-dashboard',[TeacherDashboardController::class,'dashboard'])->name('teacher.dashboard');
Route::get('/student-dashboard',[StudentDashboardController::class,'dashboard'])->name('student.dashboard');

Route::get('/add-subject',[SubjectController::class,'addSubject'])->name('add.subject');
Route::post('/new-subject',[SubjectController::class,'create'])->name('new.subject');
Route::get('/manage-subject',[SubjectController::class,'manageSubject'])->name('manage.subject');
Route::get('/approved-course',[SubjectController::class,'approvedSubject'])->name('approved.course');
Route::get('/enrolled-student/{id}',[SubjectController::class,'enrolledStudent'])->name('enrolled.student');






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-teacher',[TeacherController::class,'index'])->name('add.teacher');
    Route::post('/new-teacher',[TeacherController::class,'create'])->name('new.teacher');
    Route::get('/manage-teacher',[TeacherController::class,'manage'])->name('manage.teacher');

    Route::get('/edit-teacher/{id}',[TeacherController::class,'edit'])->name('edit.teacher');
    Route::post('/update-teacher/{id}',[TeacherController::class,'update'])->name('update.teacher');
    Route::get('/delete-teacher/{id}',[TeacherController::class,'delete'])->name('delete.teacher');


    Route::get('/manage-course',[AdminCourseController::class,'manage'])->name('manage.course');
    Route::get('/view-detail/{id}',[AdminCourseController::class,'detail'])->name('view.detail');
    Route::get('/update-status/{id}',[AdminCourseController::class,'updateStatus'])->name('update.status');

    Route::get('/manage.student',[AdminStudentController::class,'studentManage'])->name('manage.student');
    Route::get('/student-status/{id}',[AdminStudentController::class,'updateStatus'])->name('student.status');
    Route::get('/update-enroll-status/{id}',[AdminStudentController::class,'updateEnrollStatus'])->name('update.enroll.status');
    Route::get('/manage-student-course',[AdminStudentController::class,'studentCourseManage'])->name('manage.student.course');


});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','superAdmin'])->group(function () {
    Route::get('/add-user',[AdminController::class,'addUser'])->name('add.user');
    Route::post('/new-user',[AdminController::class,'create'])->name('new.user');
    Route::get('/manage-user',[AdminController::class,'manageUser'])->name('manage.user');
    Route::get('/edit-user/{id}',[AdminController::class,'edit'])->name('edit.user');
    Route::post('/update-user/{id}',[AdminController::class,'update'])->name('update.user');
    Route::get('/delete-user/{id}',[AdminController::class,'delete'])->name('delete.user');
});


