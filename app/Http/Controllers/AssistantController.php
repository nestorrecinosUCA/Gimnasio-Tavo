<?php

namespace App\Http\Controllers;

use App\Models\Assistant;
use App\Models\Membership;
use Illuminate\Http\Request;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistants = Assistant::with('membership')->get('*');
        return view('welcome', compact('assistants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $memberships = Membership::get('*');
        return view('newClient', compact('memberships'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $randomNum = rand(1000,9999);
        $name = $request->inputname;
        $secondName = $request->inputsecondName;
        $code = substr($name,0,1) . substr($secondName,0,1) . $randomNum;
        $assistant = Assistant::Create([
            'first_name' => $name,
            'last_name' => $secondName,
            'birthday' => $request->birthday,
            'gender' => $request->inputGender,
            'membership_id' => $request->inputMembership,
            'code' => $code
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $assistant = Assistant::find($id);
        $assistant->delete();
        return redirect('/');
    }
}
