<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->middleware('admin');

        $message = Message::all();
        return view('admin.message.index', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.contact");
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
            'fullname' => 'required',
            'phone' => 'required|min:10',
            'email' => 'required|email',
            'message' => 'required|max:100']);


        $res = Message::create($request->all());

        if($res){
            \Session::flash('flash_msg',' your Message has been successfully Sent!');
            return redirect('/contact');
        }else{
            \Session::flash('flash_msg','Error while Sending  Message!');
            return redirect('/contact');
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

        $message = Message::findOrFail($id);
        $res = $message->delete();

        if($res){
            \Session::flash('flash_msg','Message has been successfully deleted!');
            return redirect('/admin/Message');
        }else{
            \Session::flash('flash_msg','Error while deleting Message!');
            return redirect('/admin/Message');
        }
    }
}
