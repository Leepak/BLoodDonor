<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodRequest;
use App\Blood;
use App\District;
use App\City;
use App\Donor;
use File;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cartalyst\Sentinel\Roles\EloquentRole;


class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        $bloodrequest = new BloodRequest;
        $bloodrequest = BloodRequest::all();


        return view('admin.request.index', [
            'bloodrequest' => $bloodrequest
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.BloodRequest");
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

            'patientname' => 'required',
            'gender' => 'required',
            'blood_id' => 'required',
            'district_id' => 'required',
            'city_id' => 'required',
            "phone" => "required|max:10",
            'diseases' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'hospital' => 'required',

        ],

            [

                'patientname.required'    => 'Patient Fullame is required',
                'gender.required'    => 'Gender is required',
                'blood_id.required'    => 'Blood Group is required',
                'district_id.required'    => 'District Name is required',
                'city_id.required'    => 'City Name is required',
                'diseases.required' => ' Patients diseases is required',
                'amount.required' => 'Amount of blood needed is  address',
                'date.required' => 'Blood required date is required',
                'hospital.required' => 'Hospital Name is required',
                'phone.required'    => 'Phone Number is required',
        ]);


        $res = BloodRequest::create($request->all());

        if($res){
            \Session::flash('flash_msg',' your Request has been successfully Sent!');
            return redirect('/BloodRequest');
        }else{
            \Session::flash('flash_msg','Error while Sending  Request!');
            return redirect('/BloodRequest');
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
        $bloodrequest = BloodRequest::findOrFail($id);
        $district = District::pluck('district_name','id');
        $blood = Blood::pluck('blood_group','id');



        return view('admin.request.view',[
            'bloodrequest' => $bloodrequest,
            'district' => $district,
            'blood' => $blood,




        ]);
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
      //  dd($request->all());
        $data = request()->except(['_token','_method']);
        $bloodrequest = BloodRequest::findOrFail($id);
        BloodRequest::where('id', $id)->update($data);
        return redirect('/admin/BloodRequest')->with(['flash_msg' => 'Blood Request Accepted']);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//dd('kapil');
        $bloodrequest = BloodRequest::findOrFail($id);
        $res = $bloodrequest->delete();

        if($res){
            \Session::flash('flash_msg','Blood Request has been successfully deleted!');
            return redirect('/admin/BloodRequest');
        }else{
            \Session::flash('flash_msg','Error while deleting Blood Request!');
            return redirect('/admin/BloodRequest');
        }
    }
}
