<?php

namespace App\Repositories\Eloquent;

use App\Currency;
use App\Repositories\Contracts\CurrencyRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCurrencyRepository extends AbstractRepository implements CurrencyRepository
{
    public function entity()
    {
        return \App\Model\Currency::class;
    }

    public function store($request)
    {
        $data['currency_name']=$request->currency_name;
        $data['currency_symbol']=$request->currency_symbol;
        $data['status']=$request->status;
        $create=$this->entity::create($data);
        return $create;
    }

    public function getAll()
    {
        $all=$this->entity()::all();
        return $all;
    }

    public function getbyId($id)
    {
        $find=$this->entity()::find($id);
        return $find;
    }

    public function update($request, $id)
    {
        $find=$this->entity()::find($id);
        $data['currency_name']=$request->currency_name;
        $data['currency_symbol']=$request->currency_symbol;
        $data['status']=$request->status;
        $update=$find->update($data);
        return $update;
    }

    public function delete($id)
    {
        $find=$this->entity()::find($id);
        $del= $find->delete();
        return $del;
    }
}
