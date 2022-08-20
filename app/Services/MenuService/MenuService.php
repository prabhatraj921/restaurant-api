<?php

namespace App\Services\MenuService;


use Illuminate\Support\Facades\DB;

class MenuService
{

    public function create($input_data)
    {
        $result = DB::select('call p_menu_ins(:name, :description, :file_id, :category_id, :user_id)', [
            ':name' => $input_data['name'],
            ':description' => $input_data['description'],
            ':file_id' => $input_data['file_id'],
            ':category_id' => $input_data['category_id'],
            ':user_id' => $input_data['user_id'],
        ]);
        if (!empty($result)) {
            return ['status' => 0, 'message' => 'Menu Created successfully', 'menu_id' => $result[0]];
        } else {
            return ['status' => -1, 'message' => 'Error occurred'];
        }
    }

}

