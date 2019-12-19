<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Blood;
use App\Donor;
use DB;
use  PDF;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // middleware
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('revalidate');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report()
    {
        $blood = Blood::pluck('blood_group', 'id');
        $district = District::pluck('district_name', 'id');
        $report = Donor::all();
        return view('admin.report.index', [
            'blood' => $blood,
            'district' => $district,
            'report' => $report,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function viewReport(Request $request)
    {
        $district = $request->district;
        $blood = $request->blood;
        $report = Donor::where('blood_id', $blood)->where('district_id', $district)->get();


        return view('admin.report.pdf', [
            'report' => $report,
            'district' => $district,
            'blood' => $blood,
        ]);


    }

    public function pdfview(Request $request)

    {
       print_r('this feture is not available Now !!');
    }
}
