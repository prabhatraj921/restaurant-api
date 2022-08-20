<?php

namespace App\Http\Controllers\MenuController;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileHandler\FileHandlerRequest;
use App\Http\Requests\Menu\MenuCreateRequest;
use App\Services\MenuService\MenuService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MenuController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var MenuService
     */
    protected $menu_service;

    public function __construct()
    {
        $this->menu_service = resolve('MenuService');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MenuCreateRequest $request): array
    {
        $user = $request->user[0];
        $input_data = $request->validated();
        return $this->menu_service->create($input_data);
    }
}


