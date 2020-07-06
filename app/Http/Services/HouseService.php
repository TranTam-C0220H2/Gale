<?php


namespace App\Http\Services;

use App\House;
use App\Http\Repositories\HouseRepository;

class HouseService
{
    protected $houseRepository;

    public function __construct(HouseRepository $houseRepository)
    {
        $this->houseRepository = $houseRepository;
    }

    public function findById($id)
    {
        return $this->houseRepository->findById($id);
    }


    public function store($request)
    {
        $this->houseRepository->store($request->all());
    }

    public function getAll()
    {
        return $this->houseRepository->getAll();
    }

    public function search($bedRoom, $bathRoom, $priceLimit, $location)
    {
        return $this->houseRepository->search($bedRoom,$bathRoom,$priceLimit,$location);
    }
}

