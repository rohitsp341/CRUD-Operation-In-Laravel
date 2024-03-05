<?php

namespace App\Http\Controllers;

use App\Models\load;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function insertData(Request $request)
    {
        $model= new load;
        $username = $request->input('username');
        $email = $request->input('email');
        $country = $request->input('country');
        $bod = $request->input('bod');
        $gender = $request->input('gender');

        $result = $model->insertRecord($username, $email, $country, $bod, $gender);  // model to store data in database

        return response()->json(['message' => $result]);
    }

    public function getData()
    {
        $model = new load;
        $Retrive_data = $model->getAllRecords();    // model to retrive data
        echo json_encode($Retrive_data);  // json_encode : converts object to array 
    }

    public function editData(Request $request)
    {
        try {
            $model = new load;
            $id = $request->input('edit_id');

            $retrievedData_edit_form = $model->getRecordById($id);

            return response()->json($retrievedData_edit_form);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function UpdataData(Request $request)
    {
        $model = new load;

        $id = $request->input('id');
        $username = $request->input('username');
        $email = $request->input('email');
        $country = $request->input('country');
        $bod = $request->input('bod');
        $gender = $request->input('gender');

        

        $result = $model->updateRecord($id, $username, $email, $country, $bod, $gender);

        if ($result === 'Record updated successfully') {
            $Retrive_data = $model->getAllRecords();
            return response()->json(['Retrive_data'=>$Retrive_data]);

        } else {
            return response()->json(['error' => $result], 500);
        }
    }

    public function deleteData(Request $request)
    {
        try {
            $model = new load;
            $id = $request->input('id');

            
            $result = $model->deleteRecord($id);

            if ($result === 'Record deleted successfully') {
                $Retrive_data = $model->getAllRecords();
                return response()->json(['Retrive_data' => $Retrive_data]);
            } else {
                return response()->json(['error' => $result], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    
}
