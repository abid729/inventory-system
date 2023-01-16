<?php

namespace App\Http\Controllers;

use App\Models\BaseUnits;
use App\Http\Requests\StoreBaseUnitsRequest;
use App\Http\Requests\UpdateBaseUnitsRequest;
use App\Repository\IBaseUnitsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BaseunitsController extends Controller
{
    public $unit;

    public function __construct(IBaseUnitsRepository $unit)
    {
        $this->unit = $unit;
    }


    public function ShowAllUnits() {
       
        $unit =  $this->unit->getAllUnits();
        
        return view('admin_assets.BaseUnits.unit')->with('units', $unit);
    }
    public function create()
    {

        // create page
        return view('admin_assets.BaseUnits.add_unit');
    }
    public function store(Request $request)
    {
// dd($request->all());
        // validate and store data
        $request->validate([
            'name' => 'required',
        ]);
       
        //short_name upload

        $data = $request->all();

        
        // dd($this->unit->createUnit($data));
        $this->unit->createUnit($data);

        return redirect('admin/baseunit/all');

    }
    public function edit($id)
    {
        $unit = $this->unit->editUnit($id);
        return view('admin_assets.BaseUnits.edit_unit')->with('unit', $unit);
    }


    public function update(Request $request, $id)
    {

       
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return \Redirect::back()->withInput()->withErrors($validator);
        }
        //short_name upload
       
        $data = $request->all();

        

        $this->unit->updateUnit($id, $data);

        return redirect('admin/baseunit/all');

    }
// public function changeStatus(){}
public function changeStatus(Request $request)
{
    $user = BaseUnits::find($request->id);
    $user->status = $request->status;
    $user->save();

    return response()->json(['success'=>'Status change successfully.']);
}

public function DeleteUnits($id) {
    $this->unit->DeleteUnit($id);
    return redirect('admin/baseunit/all');
}
}
