<?php

namespace App\Services\CategoryService;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryService
{

    public function create($input_data)
    {
        $result = DB::select('call p_category_ins(:name, :description, :file_id, :restaurant_id, :user_id)', [
            ':name' => $input_data['name'],
            ':description' => $input_data['description'],
            ':file_id' => $input_data['file_id'],
            ':restaurant_id' => $input_data['restaurant_id'],
            ':user_id' => $input_data['user_id'],
        ]);
        if (!empty($result)) {
            return ['status' => 0, 'message' => 'File Uploaded successfully', 'file_id' => $result[0]];
        } else {
            return ['status' => -1, 'message' => 'Error occurred'];
        }
    }

}

