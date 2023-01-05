<?php


namespace App\Repository;

use App\Models\Units;

class UnitsRepository implements IUnitsRepository {

    public function getAllUnits()
    {
        return Units::all();
    }

    public function getActiveUnit()
    {
        return Units::where('status', '=', 1)->get();
    }
    public function createUnit(array $data)
    {
        // dd($data);
        $Unit = new Units();
        $Unit->status = 0;
        $Unit->name = $data['name'];
        $Unit->short_name = $data['short_name'];
        $Unit->base_unit = $data['base_unit'];
       
        $Unit->save();
    }
    public function editUnit($id)
    {
        return Units::find($id);
    }
    public function  updateUnit($id, array $data)
    {
        Units::find($id)->update([
            'short_name' => $data['short_name'],
            'name' => $data['name'],
            'status' => 0,
            'base_unit' => $data['base_unit']
        ]);
    }


    public function DeleteUnit($id)
    {
        return Units::find($id)->delete();
    }
}



?>
