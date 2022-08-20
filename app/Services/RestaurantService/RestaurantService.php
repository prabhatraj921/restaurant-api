<?php

namespace App\Services\RestaurantService;


use Illuminate\Support\Facades\DB;

class RestaurantService
{

    public function create($input_data){
        $result = DB::select('call p_restaurant_ins(:name, :address_line_1, :address_line_2, :city, :state, :zipcode, :country, :logo_file_id, :contact_number, :ext,:user_id)', [
            ':name' => $input_data['name'],
            ':address_line_1' => $input_data['address_line_1'],
            ':address_line_2' => $input_data['address_line_2'],
            ':city' => $input_data['city'],
            ':state' => $input_data['state'],
            ':zipcode' => $input_data['zipcode'],
            ':country' => $input_data['country'],
            ':logo_file_id' => $input_data['logo_file_id'],
            ':contact_number' => $input_data['contact_number'],
            ':ext' => $input_data['ext'],
            ':user_id' => $input_data['user_id']
        ]);
        if (!empty($result[0]->restaurant_id)) {
            return ['status' => 0, 'message' => 'Restaurant created successfully', 'restaurant_id' => $result[0]->restaurant_id];
        } else {
            return ['status' => -1, 'message' => 'Restaurant Could not be added'];
        }
    }
}
