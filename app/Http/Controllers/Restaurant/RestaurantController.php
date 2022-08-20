<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Restaurant\RestaurantCreateRequest;
use App\Services\RestaurantService\RestaurantService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * @var RestaurantService
     */
    protected $restaurant_service;

    public function __construct(){
        $this->restaurant_service = resolve('RestaurantService');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RestaurantCreateRequest $request): array
    {
        $input_data = $request->validated();
        return $this->restaurant_service->create($input_data);
    }
    public function update(Request $request): array
    {
        return ["logged in"];
    }
}


