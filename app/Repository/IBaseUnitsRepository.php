<?php
namespace App\Repository;

interface IBaseUnitsRepository {

    public function getAllUnits();

    public function getActiveUnit();

    public function createUnit(array $data);

    public function editUnit($id);

    public function updateUnit($id, array $data);
    public function DeleteUnit($id);

}




?>
