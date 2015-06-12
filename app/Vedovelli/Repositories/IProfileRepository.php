<?php namespace App\Vedovelli\Repositories;

interface IProfileRepository
{
    public function dataForSelect();
    public function index();
    public function show($id);
    public function store($input);
    public function update($id, $input);
    public function destroy($id);
}