<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class load extends Model
{
    use HasFactory;
    
    protected $table = 'users2';

    protected $fillable = ['username', 'email', 'country', 'bod', 'gender'];

    public static function insertRecord($username, $email, $country, $bod, $gender)
    {
        try {
            DB::table('users2')->insert([

                'username' => $username,
                'email' => $email,
                'country' => $country,
                'bod' => $bod,
                'gender' => $gender,
            ]);

            return 'Record added successfully';
            
        } catch (\Exception $e) {
            return 'Error adding record: ' . $e->getMessage();
        }
    }

    public function getAllRecords()
    {
        
        return $this->all();
    }

    
    public function getRecordById($id)
    {
        $record = $this->find($id);
    
        if (!$record) {
            return []; 
        }
    
        $data = [
            'id'=>$record->id,
            'username' => $record->username,
            'email' => $record->email,
            'country' => $record->country,
            'bod' => $record->bod,
            'gender' => $record->gender,
           
        ];
    
        return $data;
    }

    public function updateRecord($id, $username, $email, $country, $bod, $gender)
    {
        try {
            $record = $this->find($id);

            if ($record) {
                $record->update([

                    'id'=>$id,
                    'username' => $username,
                    'email' => $email,
                    'country' => $country,
                    'bod' => $bod,
                    'gender' => $gender,
                ]);

                return 'Record updated successfully';
            } else {
                return 'Record not found';
            }
        } catch (\Exception $e) {
            return 'Error updating record: ' . $e->getMessage();
        }
    }

    public function deleteRecord($id)
    {
        try {
            $record = $this->find($id);

            if ($record) {
                $record->delete();
                return 'Record deleted successfully';
            } else {
                return 'Record not found';
            }
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    

   

  
}
