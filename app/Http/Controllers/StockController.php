<?php

namespace App\Http\Controllers;

use App\Repositories\UpdateStockRepository;
use App\Repositories\GetStockRepository;
use Illuminate\Http\Request;

class StockController extends Controller
{
    protected $UpdateStockRepository;
    protected $GetStockRepository;

    public function __construct(UpdateStockRepository $UpdateStockRepository, GetStockRepository $GetStockRepository)
    {
        $this->UpdateStockRepository = $UpdateStockRepository;
        $this->GetStockRepository = $GetStockRepository;
    }
    public function update_stock_category()
    {
        return $this->UpdateStockRepository->update_stock_category();
    }

    public function update_stock_name()
    {
        return $this->UpdateStockRepository->update_stock_name();
    }
    public function update_stock_data()
    {
        return $this->UpdateStockRepository->update_stock_data();
    }

    public function get_stock_category()
    {
        return $this->GetStockRepository->get_stock_category();
    }
    public function get_stock_name()
    {
        return $this->GetStockRepository->get_stock_name();
    }
    public function cal_stock(Request $request)
    {
        return $this->GetStockRepository->cal_stock($request);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
