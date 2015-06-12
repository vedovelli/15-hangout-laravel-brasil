<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Request as Request;
use App\Vedovelli\Repositories\IProfileRepository;

class ProfileController extends Controller {

	protected $profileRepository;

    function __construct(IProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = $this->profileRepository->index();

		return view('profile.index')->with(compact('profiles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$profile = null;

		return view('profile.form')->with(compact('profile'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->profileRepository->store(Request::all());

		return redirect()->route('profile.index')->with('success', 'Inserido com sucesso!');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = $this->profileRepository->show($id);

		return view('profile.form')->with(compact('profile'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->profileRepository->update($id, Request::all());

		return redirect()->route('profile.index')->with('success', 'Atualizado com sucesso!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->profileRepository->destroy($id);

		return back()->with('success', 'Removido com sucesso!');
	}

}
