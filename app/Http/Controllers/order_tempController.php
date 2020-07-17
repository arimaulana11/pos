<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createorder_tempRequest;
use App\Http\Requests\Updateorder_tempRequest;
use App\Repositories\order_tempRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class order_tempController extends AppBaseController
{
    /** @var  order_tempRepository */
    private $orderTempRepository;

    public function __construct(order_tempRepository $orderTempRepo)
    {
        $this->orderTempRepository = $orderTempRepo;
    }

    /**
     * Display a listing of the order_temp.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderTemps = $this->orderTempRepository->all();

        return view('order_temps.index')
            ->with('orderTemps', $orderTemps);
    }

    /**
     * Show the form for creating a new order_temp.
     *
     * @return Response
     */
    public function create()
    {
        return view('order_temps.create');
    }

    /**
     * Store a newly created order_temp in storage.
     *
     * @param Createorder_tempRequest $request
     *
     * @return Response
     */
    public function store(Createorder_tempRequest $request)
    {
        $input = $request->all();

        $orderTemp = $this->orderTempRepository->create($input);

        Flash::success('Order Temp saved successfully.');

        return redirect(route('orderTemps.index'));
    }

    /**
     * Display the specified order_temp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderTemp = $this->orderTempRepository->find($id);

        if (empty($orderTemp)) {
            Flash::error('Order Temp not found');

            return redirect(route('orderTemps.index'));
        }

        return view('order_temps.show')->with('orderTemp', $orderTemp);
    }

    /**
     * Show the form for editing the specified order_temp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderTemp = $this->orderTempRepository->find($id);

        if (empty($orderTemp)) {
            Flash::error('Order Temp not found');

            return redirect(route('orderTemps.index'));
        }

        return view('order_temps.edit')->with('orderTemp', $orderTemp);
    }

    /**
     * Update the specified order_temp in storage.
     *
     * @param int $id
     * @param Updateorder_tempRequest $request
     *
     * @return Response
     */
    public function update($id, Updateorder_tempRequest $request)
    {
        $orderTemp = $this->orderTempRepository->find($id);

        if (empty($orderTemp)) {
            Flash::error('Order Temp not found');

            return redirect(route('orderTemps.index'));
        }

        $orderTemp = $this->orderTempRepository->update($request->all(), $id);

        Flash::success('Order Temp updated successfully.');

        return redirect(route('orderTemps.index'));
    }

    /**
     * Remove the specified order_temp from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderTemp = $this->orderTempRepository->find($id);

        if (empty($orderTemp)) {
            Flash::error('Order Temp not found');

            return redirect(route('orderTemps.index'));
        }

        $this->orderTempRepository->delete($id);

        Flash::success('Order Temp deleted successfully.');

        return redirect(route('orderTemps.index'));
    }
}
