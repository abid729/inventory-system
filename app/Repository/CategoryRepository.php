<?php


namespace App\Repository;

use App\Models\Categories;

class CategoryRepository implements ICategoryRepository {

    public function getAllCategory()
    {
        return Categories::all();
    }

    public function getActiveCategory()
    {
        return Categories::where('status', '=', 1)->get();
    }
    public function createCategory(array $data)
    {
        $category = new Categories();
        $category->name = $data['name'];
        $category->image = $data['image'];
       


        $category->save();
    }
    public function editCategory($id)
    {
        return Categories::find($id);
    }
    public function  updateCategory($id, array $data)
    {
        Categories::find($id)->update([
            'image' => $data['image'],
            'name' => $data['name']
        ]);
    }

    public function DeleteCategory($id)
    {
        return Categories::find($id)->delete();
    }

}



?>
