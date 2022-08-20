<?php

namespace App\Services\FileHandlerService;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FileHandlerService
{

    public function upload($file_details, $user)
    {
        $result = DB::select('call p_file_ins(:name, :file_type_id, :file_extension, :size, :user_id, :path)', [
            ':name' => $file_details['file']->getClientOriginalName(),
            ':file_type_id' => $file_details['file_type_id'],
            ':file_extension' => $file_details['file']->getClientOriginalExtension(),
            ':size' => $file_details['file']->getSize(),
            ':user_id' => $user->id,
            ':path' => $file_details['file']->getPath(),
        ]);
        if (!empty($result)) {
            Storage::disk('local')->putFileAs('files',
                $file_details['file'],
                $result[0]->file_id . '.' . $file_details['file']->getClientOriginalExtension());
            return ['status' => 0, 'message' => 'File Uploaded successfully', 'file_id' => $result[0]->file_id];
        } else {
            return ['status' => -1, 'message' => 'Error occurred'];
        }
    }
}

