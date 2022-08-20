<?php

namespace App\Http\Controllers\FileHandler;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileHandler\FileHandlerRequest;
use App\Services\FileHandlerService\FileHandlerService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class FileHandlerController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var FileHandlerService
     */
    protected $file_handler_service;

    public function __construct()
    {
        $this->file_handler_service = resolve('FileHandlerService');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(FileHandlerRequest $request): array
    {
        $user = $request->user[0];
        $file_details = $request->validated();
        return $this->file_handler_service->upload($file_details, $user);
    }
}


