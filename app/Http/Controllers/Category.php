<?php

namespace App\Http\Controllers;
use App\Repository\ICategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class Category extends Controller
{
    public $category;

    public function __construct(ICategoryRepository $category)
    {
        $this->category = $category;
    }


    public function ShowAllCategory() {
       


        $category =  $this->category->getAllCategory();
        
        return view('admin_assets.Category.category')->with('category', $category);
    }
    public function create()
    {
    //  dd('test');
        // create page
        return view('admin_assets.Category.add_categories');
    }
    public function store(Request $request)
    {
        // $urlWithQueryString = $request->fullUrl();
        // $request->fullUrlWithQuery(['url' => $urlWithQueryString]);
       

        // ($name = $request->input('name', 'Sally') );
        // dd($name);
        // validate and store data
        $request->validate([
            'image' => 'required',
            'name' => 'required'
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('image')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['image'] = "$name";
        }

        $this->category->createCategory($data);

        return redirect('admin/category/all');

    }
    public function edit($id)
    {
        $category = $this->category->editCategory($id);
        return view('admin_assets.Category.edit_categories')->with('category', $category);
    }


    public function update(Request $request, $id)
    {

       
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return \Redirect::back()->withInput()->withErrors($validator);
        }
        //image upload
       
        $data = $request->all();

        if($image = $request->file('image')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['image'] = "$name";
        }

        $this->category->updateCategory($id, $data);

        return redirect('admin/category/all');

    }
    public function DeleteCategory($id) {
        $this->category->DeleteCategory($id);
        return redirect('admin/category/all');
    }
}
