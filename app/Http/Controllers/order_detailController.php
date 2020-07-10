<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createorder_detailRequest;
use App\Http\Requests\Updateorder_detailRequest;
use App\Repositories\order_detailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class order_detailController extends AppBaseController
{
    /** @var  order_detailRepository */
    private $orderDetailRepository;

    public function __construct(order_detailRepository $orderDetailRepo)
    {
        $this->orderDetailRepository = $orderDetailRepo;
    }

    /**
     * Display a listing of the order_detail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderDetails = $this->orderDetailRepository->all();

        return view('order_details.index')
            ->with('orderDetails', $orderDetails);
    }

    /**
     * Show the form for creating a new order_detail.
     *
     * @return Response
     */
    public function create()
    {
        return view('order_details.create');
    }

    /**
     * Store a newly created order_detail in storage.
     *
     * @param Createorder_detailRequest $request
     *
     * @return Response
     */
    public function store(Createorder_detailRequest $request)
    {
        $input = $request->all();

        $orderDetail = $this->orderDetailRepository->create($input);

        Flash::success('Order Detail saved successfully.');

        return redirect(route('orderDetails.index'));
    }

    /**
     * Display the specified order_detail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderDetail = $this->orderDetailRepository->find($id);

        if (empty($orderDetail)) {
            Flash::error('Order Detail not found');

            return redirect(route('orderDetails.index'));
        }

        return view('order_details.show')->with('orderDetail', $orderDetail);
    }

    /**
     * Show the form for editing the specified order_detail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderDetail = $this->orderDetailRepository->find($id);

        if (empty($orderDetail)) {
            Flash::error('Order Detail not found');

            return redirect(route('orderDetails.index'));
        }

        return view('order_details.edit')->with('orderDetail', $orderDetail);
    }

    /**
     * Update the specified order_detail in storage.
     *
     * @param int $id
     * @param Updateorder_detailRequest $request
     *
     * @return Response
     */
    public function update($id, Updateorder_detailRequest $request)
    {
        $orderDetail = $this->orderDetailRepository->find($id);

        if (empty($orderDetail)) {
            Flash::error('Order Detail not found');

            return redirect(route('orderDetails.index'));
        }

        $orderDetail = $this->orderDetailRepository->update($request->all(), $id);

        Flash::success('Order Detail updated successfully.');

        return redirect(route('orderDetails.index'));
    }

    /**
     * Remove the specified order_detail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderDetail = $this->orderDetailRepository->find($id);

        if (empty($orderDetail)) {
            Flash::error('Order Detail not found');

            return redirect(route('orderDetails.index'));
        }

        $this->orderDetailRepository->delete($id);

        Flash::success('Order Detail deleted successfully.');

        return redirect(route('orderDetails.index'));
    }
}
