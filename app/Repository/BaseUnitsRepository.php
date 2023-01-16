<?php


namespace App\Repository;

use App\Models\BaseUnits;

class BaseUnitsRepository implements IBaseUnitsRepository {

    public function getAllUnits()
    {
        return BaseUnits::all();
    }

    public function getActiveUnit()
    {
        return BaseUnits::where('status', '=', 1)->get();
    }
    public function createUnit(array $data)
    {
        // dd($data);
        $Unit = new BaseUnits();
        $Unit->status = 0;
        $Unit->name = $data['name'];
       
        $Unit->save();
    }
    public function editUnit($id)
    {
        return BaseUnits::find($id);
    }
    public function  updateUnit($id, array $data)
    {
        BaseUnits::find($id)->update([
           'name' => $data['name'],
            'status' => 0
        ]);
    }


    public function DeleteUnit($id)
    {
        return Units::find($id)->delete();
    }
}



?>
