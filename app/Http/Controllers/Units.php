<?php

namespace App\Http\Controllers;

use App\Models\Units as ModelsUnits;
use App\Repository\IUnitsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Units extends Controller
{
    public $unit;

    public function __construct(IUnitsRepository $unit)
    {
        $this->unit = $unit;
    }


    public function ShowAllUnits() {
       
        $unit =  $this->unit->getAllUnits();
        
        return view('admin_assets.Units.unit')->with('units', $unit);
    }
    public function create()
    {

        // create page
        return view('admin_assets.Units.add_unit');
    }
    public function store(Request $request)
    {
// dd($request->all());
        // validate and store data
        $request->validate([
            'short_name' => 'required',
            'name' => 'required',
            'base_unit' => 'required'
        ]);
       
        //short_name upload

        $data = $request->all();

        
        // dd($this->unit->createUnit($data));
        $this->unit->createUnit($data);

        return redirect('admin/unit/all');

    }
    public function edit($id)
    {
        $unit = $this->unit->editUnit($id);
        return view('admin_assets.Units.edit_unit')->with('unit', $unit);
    }


    public function update(Request $request, $id)
    {

       
        $validator = Validator::make($request->all(), [
            'short_name' => 'required',
            'name' => 'required',
            'base_unit' => 'required'
        ]);
        if ($validator->fails()) {
            dd($request->all());
        }
        //short_name upload
       
        $data = $request->all();

        

        $this->unit->updateUnit($id, $data);

        return redirect('admin/unit/all');

    }
// public function changeStatus(){}
public function changeStatus(Request $request)
{
    $user = ModelsUnits::find($request->id);
    $user->status = $request->status;
    $user->save();

    return response()->json(['success'=>'Status change successfully.']);
}

public function DeleteUnits($id) {
    $this->unit->DeleteUnit($id);
    return redirect('admin/unit/all');
}
}