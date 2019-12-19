<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Blood;
use App\District;
use App\City;
use App\Donor;
use File;
use Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cartalyst\Sentinel\Roles\EloquentRole;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function DonorRegister()
//    {
//        return view("pages.DonorRegister");
//    }

    public function BloodRequest()
    {
        $blood = Blood::pluck('blood_group','id');
        $city = City::pluck('city_name','id');
        $district = District::pluck('district_name','id');
        return view('pages.BloodRequest', [
            'blood' => $blood,
            'city' => $city,
            'district' => $district,
        ]);
    }
    public function SearchDonor()
    {
        return view("pages.SearchDonor");
    }

    public function ContactUS()
    {
        return view("pages.contact");
    }

    public function Login()
    {
        return view("pages.Login");
    }

    public function index()
    {
        $donor = Donor::all();
        $blood = Blood::pluck('blood_group','id');
        $district = District::pluck('district_name','id');
        $city = City::pluck('city_name','id');
        return view('pages.DonorRegister', [
            'donor' => $donor,
            'blood' => $blood,
            'city' => $city,
            'district' => $district,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        $blood = Blood::pluck('blood_group','blood_id');
//        $district = District::pluck('district_name','district_id');
//        $city = City::pluck('city_name','city_id');
//        return view('pages.DonorRegister', [
//            'blood' => $blood,
//            'district' => $district,
//            'city' => $city
//        ]);

       // ECHO"KAPIL";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Validation
        $this->validate($request,[

            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'blood_id' => 'required',
            'district_id' => 'required',
            'city_id' => 'required',
            "phone" => "required|max:10|unique:donors,phone",
            "email" => "required|email|unique:donors,email",
            "email" => "required|email|unique:users,email",
        ],

            [
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
                'email.unique' => 'The email ID you entered already exist',

            ] );

        $data = $request->all();
        $donor = new Donor();
        //Recieve file name
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

            $user->roles()->attach($user);
            $data['user_id'] = $user->id;
            $res = $donor->create($data);
            if($res){
                \Session::flash('flash_msg','You has been successfully Registered! Your Login password is : password');
                return redirect('/Register');
            }else{
                \Session::flash('flash_msg','Error while Adding !');
                return redirect('/Register');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showCity(Request $request)
    {
        $city = City::where('districtID', $request->id)->get();
        $data = array();
        foreach ($city as $key => $value) {
            # code...
            // echo "&lt;option value='".$value->id."'&gt".$value->section_name."&lt;/option&gt";
            // echo "<br>";
            $data[] = ['id' => $value->id, 'name' => $value->city_name];

        }

        return response()->json($data);

    }


    public function getStates($id) {
        $city = City::where('districtID', $id)->get();
        $data = array();
        foreach ($city as $key => $value) {
            # code...
            // echo "&lt;option value='".$value->id."'&gt".$value->section_name."&lt;/option&gt";
            // echo "<br>";
            $data[] = ['id' => $value->id, 'name' => $value->city_name];

        }

        return response()->json($data);

    }

}
