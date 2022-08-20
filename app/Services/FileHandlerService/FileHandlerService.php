<?php

namespace App\Services\FileHandlerService;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FileHandlerService
{

    public function create($file, $user){

        $result = DB::select('call p_file_ins(:name, :file_type, :file_extension, :size, :user_id, :path)', [
            ':name' => $file['file']->getClientOriginalName(),
            ':file_type_id' => $file['file_type_id'],
            ':file_extension_id' => $file['file']->getClientOriginalExtension(),
            ':size' => $file['file']->getSize(),
            ':user_id' => $user->id,
            ':path' => $file['zipcode'],
        ]);
        dd($result);
        if ($result) {
            $token = Str::random(60);
            $this->insertUserAuthToken($result[0]->user_id, $token);
            return ['status' => 0, 'message' => 'user created successfully', 'file_id' => $result[0]->file_id];
        } else {
            return ['status' => -1, 'message' => 'user already exists'];
        }
    }
}

