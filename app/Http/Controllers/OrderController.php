<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Requests\UserRequest;
use App\Http\Services\OrderService;
use App\Http\Services\UserService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    protected $orderService;
    protected $userService;

    public function __construct(OrderService $orderService, UserService $userService)
    {
        $this->orderService = $orderService;
        $this->userService = $userService;
    }

    public function rentHouse(Request $request, $id)
    {

        $checkIn = strtotime(str_replace('/', '-', $request->check_in));
        $arrivalDate = date('Y-m-d', $checkIn);
        $checkout = strtotime(str_replace('/', '-', $request->checkout));
        $departureDate = date('Y-m-d', $checkout);
        $arrivalDateCarbon = Carbon::create($arrivalDate);
        $departureDateCarbon = Carbon::create($departureDate);
        $rentingDays = $departureDateCarbon->diffInDays($arrivalDateCarbon);
        $house = House::findOrFail($id);
        return view('rent-house.view', compact('arrivalDate', 'departureDate', 'rentingDays', 'house', 'request'));
    }

    public function store(Request $request)
    {
        $this->orderService->store($request);
        Toastr::success('Rent successful!!!', 'Success', ["positionClass" => "toast-top-right"]);
        // need want change redirect.
        return redirect()->route('home');
    }

    public function storeUser(UserRequest $userRequest)
    {
        $this->userService->store($userRequest);
        return back();
    }
}