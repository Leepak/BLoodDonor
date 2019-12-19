<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use Sentinel;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Middleware
    //Middleware
    public function __construct()
    {
        $this->middleware('user');

        $this->middleware('revalidate');
    }



    public function dashboard()
    {
        $id =  Sentinel::getUser()->id ;
        $donor = Donor::where('user_id', $id)->orderBy('user_id', 'desc')->get();
       //return $donor;

        return view('user.dashboard',[
            'donor' => $donor,
        ]);
    }

    public function getChangePassword(){
        $id =  Sentinel::getUser()->id ;
        $donor = Donor::where('user_id', $id)->orderBy('user_id', 'desc')->get();
        return view('user.pages.changePassword',[
            'donor' => $donor,

        ]);
    }

    public function postChangePassword(Request $request){
        //Validation
        $this->validate($request, [
            'old_password' => 'required|min:5',
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|min:5',
        ]);
        $user = Sentinel::getUser();
        $oldPassword = $request->old_password;
        $newPassword = \Hash::make($request->new_password);
        $password = Sentinel::getUser()->password;
        if (Hash::check($oldPassword, $password)) { //old pw , db pw
            // The passwords match...
            $user->password = $newPassword;
            $user->update();
            \Session::flash('flash_msg','Password successfully updated!');
            return redirect('/user/dashboard');
        }else{
            \Session::flash('flash_msg','Old password did not match!');
            return redirect('/getChangePassword');
        }
    }



}
