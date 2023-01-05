<?php


namespace App\Repository;

use App\Models\Brands;

class BrandsRepository implements IBrandsRepository {

    public function getAllBrands()
    {
        return Brands::all();
    }

    public function getActiveBrand()
    {
        return Brands::where('status', '=', 1)->get();
    }
    public function createBrand(array $data)
    {
        $brand = new Brands();
        $brand->status = 0;
        $brand->name = $data['name'];
        $brand->image = $data['image'];
        $brand->description = $data['description'];
        $brand->warehouse = 0;


        $brand->save();
    }
    public function editBrand($id)
    {
        return Brands::find($id);
    }
    public function  updateBrand($id, array $data)
    {
        Brands::find($id)->update([
            'image' => $data['image'],
            'name' => $data['name'],
            'status' => 0,
            'description' => $data['description']
        ]);
    }



}



?>
