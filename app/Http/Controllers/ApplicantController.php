<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ApplicantResource;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ApplicantResource::collection(Applicant::all());
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Applicant::where('user_id', '=', $request->input('id'))->where('page_id', '=', $request->input('page_id'))->count() == 0) {

            $applicant = Applicant::create([
                'key' => $request->input('key'),
                'user_id' => $request->input('id'),
                'page_id' => $request->input('page_id'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'gender' => $request->input('gender'),
                'profile_pic' => $request->input('profile_pic'),
                'subscribed' => $request->input('subscribed'),
                //add comment here
            ]);
            return response()->json([
                'data' => new ApplicantResource($applicant),
                'message' => 'Data Successfully Inserted tes ko muna today august 8/9/2024',
            ], 201);
        }else{

            return response()->json([
                'data' =>  [],
                'message' => 'Record Already Exist',
            ], 412);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicantID)
    {
        //
        return new ApplicantResource($applicantID);
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
}
