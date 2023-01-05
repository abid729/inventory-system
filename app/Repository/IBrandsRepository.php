<?php
namespace App\Repository;

interface IBrandsRepository {

    public function getAllBrands();

    public function getActiveBrand();

    public function createBrand(array $data);

    public function editBrand($id);

    public function updateBrand($id, array $data);


}




?>
