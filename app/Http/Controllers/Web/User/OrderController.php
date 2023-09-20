<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\User\Order\StoreOrderRequest;
use App\Models\City;
use App\Models\Order;
use App\Models\Province;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use ApiResponse;

    function __construct(){
        $this->middleware('auth:web')->only(['create','store','show','edit','update','destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $provinces = Province::all();
        return view('user.orders.create',compact('cities','provinces'));
    }

    public function store(StoreOrderRequest $request)
    {
        try {

            $validated = $request->validated();

            $order = auth()->user()->orders()->create([
                'shipping_cost' => 0,
                'total_cost' => 0,
                'status' => 0,
                'receiver_city' => $validated['city'],
                'receiver_province' => $validated['province'],
                'receiver_address' => $validated['address'],
                'receiver_phone1' => $validated['phone1'],
                'receiver_phone2' => $validated['phone2'],
                'driver_notes' => $validated['driver_notes'],
                'company_notes' => $validated['company_notes'],
            ]);

            foreach ($validated['items'] as $item) {
                $order->items()->create([
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'size' => $item['size'],
                ]);
            }

            return $this->apiResponse(null, 'Order created successfully', $this->SUCCESS_CODE);

        } catch (\Exception $exception) {
            return $this->apiResponse(null, $exception->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
