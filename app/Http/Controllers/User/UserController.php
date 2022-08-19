<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\GetUserRequest;
use App\Http\Requests\User\LoginRequest;
use App\Services\UserService\UserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     *  @var UserService
     */
    protected $user_service;
    public function __construct(){
        $this->user_service = resolve('UserService');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserDetails(GetUserRequest $request): array
    {
        $input_data = $request->validated();
        return  $this->user_service->get($input_data['user_id']);
    }
}
