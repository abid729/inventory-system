<?php
namespace App\Repository;

interface ICategoryRepository {

    public function getAllCategory();

    public function getActiveCategory();

    public function createCategory(array $data);

    public function editCategory($id);

    public function updateCategory($id, array $data);
    public function DeleteCategory($id);

}




?>
