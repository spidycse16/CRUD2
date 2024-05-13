<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function showData()
    {
        return view('show_data');
    }

    public function addData()
    {
        return view('add_data');
    }

    public function storeData(Request $request)
    {
        $id=0;
        $name = $request['name'];
        $email = $request['email'];
        if ($name == null || $email == null) {
            if (!$name) {
                echo "Name cannot be empty";
            }
            if ($email == null) {
                echo "Email field cannot be empty";
            }
        }
        if ($name) {
            if (!preg_match("/^[a-zA-z]*$/", $name)) {
                $ErrMsg = "Only alphabets and whitespace are allowed.";
                echo $ErrMsg;
            }
        }
        if ($email) {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
            if (!preg_match($pattern, $email)) {
                $ErrMsg = "Email is not valid.";
                echo $ErrMsg;
            }
        }
        ++$id;
        $sql="INSERT INTO cruds (id, name, email)
        VALUES (++$id,'$name','$email')";
        $conn=mysqli_connect("localhost","root","","crud1");
        $result=mysqli_query($conn, $sql);
        if($result)
        echo "Values inserted into database successfully";
    else
    echo "Error inserting into database";
    }
}
