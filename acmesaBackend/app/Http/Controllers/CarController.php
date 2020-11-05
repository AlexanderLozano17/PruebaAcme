<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\CarCreateRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $car = Car::join('data_auxiliary', 'cars.type_car_id', 'data_auxiliary.id')->get();
            return response()->json(['response'=> $car], 200);
        } catch (Exception $e) {
            return response()->json(['response'=> $e->getMessage()], 500);
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
     * @param  \Illuminate\Http\CarCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarCreateRequest $request)
    {
        try {
            $car = new Car();

            $car->license_plate = $request->input('licensePlate');
            $car->color         = $request->input('color');
            $car->mark          = $request->input('mark');
            $car->type_car_id   = $request->input('typeCar');
            $car->owner_id      = $request->input('ownerId');

            $message = 'El registro se creo exitosamente';
            if (!$car->save()) {
                $message = 'No se ha lograo crear el registro';
            } 

            return response()->json(['response'=> $message], 200);
            
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
    {dd($request->all());
        try {
            $car = Car::findOrFail($id);

            $car->license_plate = $request->input('licensePlate');
            $car->color         = $request->input('color');
            $car->mark          = $request->input('mark');
            $car->type_car_id   = $request->input('typeCar');
            $car->owner_id      = $request->input('ownerId');

            $message = 'El registro se actualizo exitosamente';
            if (!$car->save()) {
                $message = 'No se ha logro actualizar';
            }
            return response()->json(['response'=> $message], 200);
                
        } catch (Exception $e) {
            return response()->json(['response'=> $e->getMessage()], 500);
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
        //
    }


    public function reportCar()
    {
        try {
            $car = Car::select(
                'cars.*',
                'data_auxiliary.definition',
                DB::raw("CONCAT(driver.first_name,' ',driver.second_name,' ',driver.last_name) as driver_name"),
                DB::raw("CONCAT(owner.first_name,' ',owner.second_name,' ',owner.last_name) as owner_name"),
                'type_operations.operation_name as name_operation'
            )
            ->leftjoin('car_drives', 'cars.id', 'car_drives.car_id')       
            ->leftjoin('persons as driver', 'car_drives.person_id', 'driver.id') 
            ->join('persons as owner', 'cars.owner_id', 'owner.id') 
            ->leftjoin('data_auxiliary', 'cars.type_car_id', 'data_auxiliary.id')
            ->leftjoin('car_drive_operation as operation', 'car_drives.id', 'operation.car_drive_id')
            ->leftjoin('type_operations', 'operation.type_operation_id', 'type_operations.id')
            ->get();   

            return response()->json(['response'=> $car], 200);
        } catch (Exception $e) {
            return response()->json(['response'=> $e->getMessage()], 500);
        }
    }


}
