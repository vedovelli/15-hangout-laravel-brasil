<?php namespace App\Vedovelli\Repositories;

use \App\Profile as Profile;

class ProfileRepository implements IProfileRepository
{
    public function dataForSelect()
    {
        $baseArray = Profile::all();

        $profiles = array();

        foreach ($baseArray as $value)
        {
            $profiles[$value->id] = "$value->name (id: $value->id)";
        }

        return $profiles;
    }

    public function index()
    {
        return Profile::all();
    }

    public function show($id)
    {
        return Profile::find($id);
    }

    public function store($input)
    {
        $profile = new Profile();

        $profile->name = $input['name'];

        return $profile->save();
    }

    public function update($id, $input)
    {
        $profile = Profile::find($id);

        $profile->name = $input['name'];

        return $profile->save();
    }

    public function destroy($id)
    {
        $profile = Profile::find($id);

        return $profile->delete();
    }

}