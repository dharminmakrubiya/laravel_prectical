<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmailController;
use Illuminate\Http\Request; 
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/student", StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/send-email', [EmailController::class, 'index']);

Route::post('/upload',function(Request $request){
    // $request->image->store('images','public');

    $request->validate([
        'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
    ]);

    if ($request->hasFile('image')) {
        $filename = $request->image->getClientOriginalName();
        $request->session()->flash('message','Your Profile Picture was Uploaded Successfully.');
        
        if (auth()->user()->avatar) {
            Storage::delete('/public/images/'.auth()->user()->avatar);
        }
        
        // $this->validate($request,['avatar'=> 'required|avatar|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        $request->image->storeAs('images',$filename,'public');
        auth()->User()->update(['avatar' => $filename]);
    }
    $request->session()->flash('error','Please choose your profile picture!');
    return redirect()->back();
    // dd(request()->file('image'));
});