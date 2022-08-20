<?php

namespace App\Services\RestaurantService;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RestaurantService
{

    public function create($input_data){
        $result = DB::select('call p_restaurant_ins(:name, :address_line_1, :address_line_2, :city, :state, :zipcode, :country, :logo_file_id, :contact_number, :ext)', [
            ':name' => $input_data['name'],
            ':address_line_1' => $input_data['address_line_1'],
            ':address_line_2' => $input_data['address_line_2'],
            ':city' => $input_data['city'],
            ':state' => $input_data['state'],
            ':zipcode' => $input_data['zipcode'],
            ':country' => $input_data['country'],
            ':logo_file_id' => $input_data['logo_file_id'],
            ':contact_number' => $input_data['contact_number'],
            ':ext' => $input_data['ext']
        ]);
        dd($result);
        if ($result) {
            $token = Str::random(60);
            $this->insertUserAuthToken($result[0]->user_id, $token);
            return ['status' => 0, 'message' => 'user created successfully', 'auth_token' => $token];
        } else {
            return ['status' => -1, 'message' => 'user already exists'];
        }
    }
}
