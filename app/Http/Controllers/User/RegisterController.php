<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Services\UserService\UserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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
    public function create(RegisterRequest $request): array
    {
        $input = $request->validated();
        return $this->user_service->createUser($input);
    }
    public function forgotPassword(Request $request): array
    {
        return ["forgot Password"];
    }
    public function resetPassword(Request $request): array
    {
        return ["reset Password"];
    }
}
