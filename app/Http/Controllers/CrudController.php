<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;

class CrudController extends Controller
{
    public function showData()
    {
        $show=crud::all();
        return view('show_data',compact('show'));
    }

    public function addData()
    {
        return view('add_data');
    }

    public function storeData(Request $request)
    {
        $flag=0;
        $name = $request['name'];
        $email = $request['email'];
        if ($name == null || $email == null) {
            if (!$name) {
                echo "Name cannot be empty";
            }
            if ($email == null) {
                echo "Emil cannot be empty";
            }
        }
        if ($name) {
            if (!preg_match("/^[a-zA-z]*$/", $name)) {
                $ErrMsg = "Only alphabets and whitespace are allowed.";
                echo $ErrMsg;
            }
            else
            
            $flag++;
        }
        if ($email) {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
            if (!preg_match($pattern, $email)) {
                $ErrMsg = "Email is not valid.";
                echo $ErrMsg;
            }
            else
            $flag++;
        }
    //     $sql="INSERT INTO cruds (name, email)
    //     VALUES ('$name','$email')";
    //     $conn=mysqli_connect("localhost","root","","crud1");
    //    // echo "flag= $flag <br>";
    //     if($flag==2)
    //     $result=mysqli_query($conn, $sql);
    //     if($result && $flag==2)
    //     echo "Values inserted into database successfully";
    // else
    // echo "Error inserting into database";

    if($flag==2)
    {
        $crud=new crud();
        $crud->name=$name;
        $crud->email=$email;
        $crud->save();

        Session::flash('msg','Data successfully added');
        return redirect('/');
    }
    }
}
