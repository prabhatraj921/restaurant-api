<?php

namespace App\Services\UserService;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{

    function createUser($input_data): array
    {
        $result = DB::select('call p_user_ins(:first_name, :last_name, :email, :password)', [
            ':first_name' => $input_data['first_name'],
            ':last_name' => $input_data['last_name'],
            ':email' => $input_data['email'],
            ':password' => Hash::make($input_data['password'], [
                'rounds' => 12,
            ])
        ]);
        if ($result) {
            $token = Str::random(60);
            $this->insertUserAuthToken($result[0]->user_id, $token);
            return ['status' => 0, 'message' => 'user created successfully', 'auth_token' => $token];
        } else {
            return ['status' => -1, 'message' => 'user already exists'];
        }
    }

    function login($input_data): array
    {
        $result = DB::select('call p_user_login_check(:email)', [
            ':email' => $input_data['email'],
        ]);
        if(!empty($result)){
            $verify = Hash::check($input_data['password'], $result[0]->password);
            if ($verify) {
                $token = Str::random(60);
                $this->insertUserAuthToken($result[0]->id, $token);
                return ['status' => 0, 'message' => 'User logged in', 'auth_token' => $token];
            }
        }
            return ['status' => -1, 'message' => 'Credentials does not match'];
    }

    function insertUserAuthToken($user_id, $token)
    {
       return DB::select('call p_user_auth_token_ins(:auth_token, :user_id)', [
            ':auth_token' => $token,
            ':user_id' => $user_id,
        ]);
    }
    function get($user_id)
    {
        $result =  DB::select('call p_user_details_get(:user_id)', [
            ':user_id' => $user_id,
        ]);
        if(empty($result)){
            return ['status' => -1, 'message' => 'User Not Found'];
        }
        return ['status' => 0, 'message' => 'User Found', 'data ' => $result];
    }
}
