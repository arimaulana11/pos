<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createrole_detailRequest;
use App\Http\Requests\Updaterole_detailRequest;
use App\Repositories\role_detailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class role_detailController extends AppBaseController
{
    /** @var  role_detailRepository */
    private $roleDetailRepository;

    public function __construct(role_detailRepository $roleDetailRepo)
    {
        $this->roleDetailRepository = $roleDetailRepo;
    }

    /**
     * Display a listing of the role_detail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $roleDetails = $this->roleDetailRepository->all();

        return view('role_details.index')
            ->with('roleDetails', $roleDetails);
    }

    /**
     * Show the form for creating a new role_detail.
     *
     * @return Response
     */
    public function create()
    {
        return view('role_details.create');
    }

    /**
     * Store a newly created role_detail in storage.
     *
     * @param Createrole_detailRequest $request
     *
     * @return Response
     */
    public function store(Createrole_detailRequest $request)
    {
        $input = $request->all();

        $roleDetail = $this->roleDetailRepository->create($input);

        Flash::success('Role Detail saved successfully.');

        return redirect(route('roleDetails.index'));
    }

    /**
     * Display the specified role_detail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roleDetail = $this->roleDetailRepository->find($id);

        if (empty($roleDetail)) {
            Flash::error('Role Detail not found');

            return redirect(route('roleDetails.index'));
        }

        return view('role_details.show')->with('roleDetail', $roleDetail);
    }

    /**
     * Show the form for editing the specified role_detail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roleDetail = $this->roleDetailRepository->find($id);

        if (empty($roleDetail)) {
            Flash::error('Role Detail not found');

            return redirect(route('roleDetails.index'));
        }

        return view('role_details.edit')->with('roleDetail', $roleDetail);
    }

    /**
     * Update the specified role_detail in storage.
     *
     * @param int $id
     * @param Updaterole_detailRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterole_detailRequest $request)
    {
        $roleDetail = $this->roleDetailRepository->find($id);

        if (empty($roleDetail)) {
            Flash::error('Role Detail not found');

            return redirect(route('roleDetails.index'));
        }

        $roleDetail = $this->roleDetailRepository->update($request->all(), $id);

        Flash::success('Role Detail updated successfully.');

        return redirect(route('roleDetails.index'));
    }

    /**
     * Remove the specified role_detail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roleDetail = $this->roleDetailRepository->find($id);

        if (empty($roleDetail)) {
            Flash::error('Role Detail not found');

            return redirect(route('roleDetails.index'));
        }

        $this->roleDetailRepository->delete($id);

        Flash::success('Role Detail deleted successfully.');

        return redirect(route('roleDetails.index'));
    }
}
