<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blood;
use App\District;
use App\City;
use App\Donor;
use File;
use Sentinel;
use DB;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cartalyst\Sentinel\Roles\EloquentRole;

class DonorController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');

        $this->middleware('revalidate');
    }



    public function index()
    {
        $donor = new Donor;
        $donor = Donor::all();

        return view('admin.donor.index', [
            'donor' => $donor,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $blood = Blood::pluck('blood_group','id');
        $district = District::pluck('district_name','id');

        return view('admin.donor.create', [
            'blood' => $blood,
            'district' => $district,

        ]);

       // print_r('kapil');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|max:5024',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'blood_id' => 'required',
            'district_id' => 'required',
            'city_id' => 'required',
            "phone" => "required|max:10|unique:donors,phone",
            "email" => "required|email|unique:donors,email",
            ],

            [
                'image.required'    => 'Image is required',
                'firstname.required'    => 'FirstName is required',
                'lastname.required'    => 'LastName is required',
                'gender.required'    => 'Gender is required',
                'dob.required'    => 'Birth Date is required',
                'blood_id.required'    => 'Blood Group is required',
                'district_id.required'    => 'District Name is required',
                'city_id.required'    => 'City Name is required',
                'phone.required'    => 'Phone Number is required',
                'phone.unique' => ' Phone Number you entered already exist',
                'email.required' => ' Email address is required',
                'email.email' => 'Please enter a valid email address',
                'email.unique' => 'The email ID you entered already exist',

            ] );
//          dd($request->all());
//          die;
        $data = $request->all();
        $donor = new Donor();
        //Recieve file name
        $image = $request->file('image');
        if($image){
            // change file name
            $final_image = time().'.'.$image->getClientOriginalName();
            //Move file
            $image->move("uploads/",$final_image);
            $data['image'] = $final_image;

            //credentials for user
            $user = [
                'email'    => $request->email,
                'password' => 'password',
                'first_name' => $request->firstname,
                'last_name' => $request->lastname
            ];

            //Register and Activate the user
            $user = Sentinel::registerAndActivate($user);

            //Give role to the user
            $role = EloquentRole::where('slug','user')->first();

            $role->users()->attach($user);

            $data['user_id'] = $user->id;

            $res = $donor->create($data);

            if($res){
                \Session::flash('flash_msg','Donor  has been successfully Registered! Login Password: password ');
                return redirect('/admin/Donor');
            }else{
                \Session::flash('flash_msg','Error while Adding Donor!');
                return redirect('/admin/Donor');
            }
        }else {
            //credentials for user
            $user = [
                'email' => $request->email,
                'password' => 'password',
                'first_name' => $request->firstname,
                'last_name' => $request->lastname
            ];

            //Register and Activate the user
            $user = Sentinel::registerAndActivate($user);

            //Give role to the user
            $role = EloquentRole::where('slug', 'user')->first();

            $user->roles()->attach($user);
            $data['user_id'] = $user->id;
            $res = $donor->create($data);
            if ($res) {
                \Session::flash('flash_msg', 'Donor  has been successfully Registered! Login Password: password ');
                return redirect('/admin/Donor');
            } else {
                \Session::flash('flash_msg', 'Error while Adding Donor!');
                return redirect('/admin/Donor');
            }

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $donor = Donor::findOrFail($id);
        $district = District::pluck('district_name','id');
        $blood = Blood::pluck('blood_group','id');



        return view('admin.donor.edit',[
            'donor' => $donor,
            'district' => $district,
            'blood' => $blood,




        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $donor = Donor::findOrFail($id);

        $data= $request->all();
        //Recieve file name
        $new_pic = $request->file('image');
        if($new_pic){
            //Delete the previous file
            $prevfile = public_path().'/uploads/'.$donor->image;
            File::delete($prevfile);
            // change file name
            $finalImageName = time().'.'.$new_pic->getClientOriginalName();
            //Move file
            $new_pic->move("uploads/",$finalImageName);
            $data['image'] = $finalImageName;
            $res = $donor->update($data);
            if($res){
                \Session::flash('flash_msg','Donor has been successfully updated!');
                return redirect('/admin/Donor');
            }else{
                \Session::flash('flash_msg','Error while updating Donor!');
                return redirect('/admin/Donor');
            }
        }else{
            // $data['image'] = $employee->image;
            $res = $donor->update($data);
            if($res){
                \Session::flash('flash_msg','Donor has been successfully updated!');
                return redirect('/admin/Donor');
            }else{
                \Session::flash('flash_msg','Error while updating Donor!');
                return redirect('/admin/Donor');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $donor = Donor::findOrFail($id);
        $res = $donor->delete();

        if($res){
            \Session::flash('flash_msg','Donor has been successfully deleted!');
            return redirect('/admin/Donor');
        }else{
            \Session::flash('flash_msg','Error while deleting Donor!');
            return redirect('/admin/Donor');
        }
    }
}
