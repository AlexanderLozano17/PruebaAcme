<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonCreateRequest;
use App\Person;
use Exception;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $person = Person::all();
            return response()->json(['response' => $person]);
        } catch(Exception $e) {
            return response()->json(['response' => $e->getMessage()], 500);
        }
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
     * @param  \Illuminate\Http\PersonCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonCreateRequest $request)
    {
        try {

            $person = new Person();

            $person->number_document= $request->input('numberDocument');
            $person->first_name     = $request->input('firstName');
            $person->second_name    = $request->input('secondName');
            $person->last_name      = $request->input('lastName');
            $person->address        = $request->input('address');
            $person->telephone      = $request->input('telephone');
            $person->city           = $request->input('city');

            $message = 'El registro se creo exitosamente';
            if (!$person->save()) {
                $message = 'No se ha lograo crear el registro';
            } 

            return response()->json(['response'=> $message], 200);
            
        } catch (Exception $e) {
            return response()->json(['response'=> $e->getMessage()], 500);
        }
    }

    public function cities()
    {
        try {

            $cities = ['NEIVA', 'BOGOTA', 'MEDELLIN', 'BARRANQUILLA', 'IBAGUE'];
            
            return response()->json(['cities'=> $cities], 200);
            
        } catch (Exception $e) {
            return response()->json(['response'=> $e->getMessage()], 500);
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
        try {

            $person = Person::find($id);
            
            return response()->json(['response'=> $person], 200);
            
        } catch (Exception $e) {
            return response()->json(['response'=> $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
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
        $person = Person::find($id);

        $person->first_name = $request->input('first_name');
        $person->second_name= $request->input('second_name');
        $person->last_name  = $request->input('last_name');
        $person->address    = $request->input('address');
        $person->telephone  = $request->input('telephone');
        $person->city       = $request->input('city');
        
        $message = 'No se ha logrado crear el registro';
        if ($person->save()) {
            $message = 'El registro se creo exitosamente';
        } 

        return response()->json(['response'=> $message], 200);

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
