<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createorder_detail_tempRequest;
use App\Http\Requests\Updateorder_detail_tempRequest;
use App\Repositories\order_detail_tempRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class order_detail_tempController extends AppBaseController
{
    /** @var  order_detail_tempRepository */
    private $orderDetailTempRepository;

    public function __construct(order_detail_tempRepository $orderDetailTempRepo)
    {
        $this->orderDetailTempRepository = $orderDetailTempRepo;
    }

    /**
     * Display a listing of the order_detail_temp.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderDetailTemps = $this->orderDetailTempRepository->all();

        return view('order_detail_temps.index')
            ->with('orderDetailTemps', $orderDetailTemps);
    }

    /**
     * Show the form for creating a new order_detail_temp.
     *
     * @return Response
     */
    public function create()
    {
        return view('order_detail_temps.create');
    }

    /**
     * Store a newly created order_detail_temp in storage.
     *
     * @param Createorder_detail_tempRequest $request
     *
     * @return Response
     */
    public function store(Createorder_detail_tempRequest $request)
    {
        $input = $request->all();

        $orderDetailTemp = $this->orderDetailTempRepository->create($input);

        Flash::success('Order Detail Temp saved successfully.');

        return redirect(route('orderDetailTemps.index'));
    }

    /**
     * Display the specified order_detail_temp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderDetailTemp = $this->orderDetailTempRepository->find($id);

        if (empty($orderDetailTemp)) {
            Flash::error('Order Detail Temp not found');

            return redirect(route('orderDetailTemps.index'));
        }

        return view('order_detail_temps.show')->with('orderDetailTemp', $orderDetailTemp);
    }

    /**
     * Show the form for editing the specified order_detail_temp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderDetailTemp = $this->orderDetailTempRepository->find($id);

        if (empty($orderDetailTemp)) {
            Flash::error('Order Detail Temp not found');

            return redirect(route('orderDetailTemps.index'));
        }

        return view('order_detail_temps.edit')->with('orderDetailTemp', $orderDetailTemp);
    }

    /**
     * Update the specified order_detail_temp in storage.
     *
     * @param int $id
     * @param Updateorder_detail_tempRequest $request
     *
     * @return Response
     */
    public function update($id, Updateorder_detail_tempRequest $request)
    {
        $orderDetailTemp = $this->orderDetailTempRepository->find($id);

        if (empty($orderDetailTemp)) {
            Flash::error('Order Detail Temp not found');

            return redirect(route('orderDetailTemps.index'));
        }

        $orderDetailTemp = $this->orderDetailTempRepository->update($request->all(), $id);

        Flash::success('Order Detail Temp updated successfully.');

        return redirect(route('orderDetailTemps.index'));
    }

    /**
     * Remove the specified order_detail_temp from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderDetailTemp = $this->orderDetailTempRepository->find($id);

        if (empty($orderDetailTemp)) {
            Flash::error('Order Detail Temp not found');

            return redirect(route('orderDetailTemps.index'));
        }

        $this->orderDetailTempRepository->delete($id);

        Flash::success('Order Detail Temp deleted successfully.');

        return redirect(route('orderDetailTemps.index'));
    }
}
