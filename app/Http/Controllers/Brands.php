<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Repository\IBrandsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Brands extends Controller
{
    public $brand;

    public function __construct(IBrandsRepository $brand)
    {
        $this->brand = $brand;
    }


    public function ShowAllBrands() {
       
        $brand =  $this->brand->getAllBrands();
        
        return view('admin_assets.Brands.brands')->with('brands', $brand);
    }
    public function create()
    {

        // create page
        return view('admin_assets.Brands.add_brands');
    }
    public function store(Request $request)
    {

        // validate and store data
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('image')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['image'] = "$name";
        }

        $this->brand->createBrand($data);

        return redirect('admin/all-brands');

    }
    public function edit($id)
    {
        $brand = $this->brand->editBrand($id);
        return view('admin_assets.Brands.edit_brands')->with('brand', $brand);
    }


    public function update(Request $request, $id)
    {

       
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            dd($request->all());
        }
        //image upload
       
        $data = $request->all();

        if($image = $request->file('image')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['image'] = "$name";
        }

        $this->brand->updateBrand($id, $data);

        return redirect('admin/all-brands');

    }

}
