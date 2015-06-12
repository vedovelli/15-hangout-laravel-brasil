<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vedovelli\Repositories\ProfileRepository;

class CompanyController extends Controller {

    protected $profileRepository;

    function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

	public function create()
	{
        $profiles = $this->profileRepository->dataForSelect();

        return view('company.create')->with(compact('profiles'));
	}
}
