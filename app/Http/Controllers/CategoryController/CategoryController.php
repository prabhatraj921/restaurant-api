<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Services\CategoryService\CategoryService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CategoryController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var CategoryService
     */
    protected $category_service;

    public function __construct()
    {
        $this->category_service = resolve('CategoryService');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategoryCreateRequest $request): array
    {
        $input_data = $request->validated();
        return $this->category_service->create($input_data);
    }
}


