<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //

  public function Message(){
      echo 'Message From Controller';
  }


public function createView(){
    return view('create');
}



public function store(Request $request){

      //  dd($request);
     //   echo $request->name;
    //    echo $request->input('name');

     //   dd($request->has('name'));

     //  echo   $request->method();

      //dd($request->isMethod('get'));

     // echo  $request->path();

    //  echo  $request->url();

    // echo  $request->ip();

    //   dd($request->all());
    //   dd($request->except(['_token','name']));

    //  dd($request->only(['email']));

     $name  = $request->name;
     $email = $request->email;
     $password = $request->password;
     $address = $request->address;
     $url = $request->url;
     $gender = $request->gender;

     $errors = [];
     if(empty($name)){
       $errors['Name'] = "Field Required";
     }elseif(!preg_match('/^[a-zA-Z\s]*$/',$name)){
        $errors['Name'] = "invalid string";
        }
     
	if(empty($email)){
        $errors['email'] = "Field Required";	 
      }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email'] = "invalid email";
        } 
	
    	if(empty($password)){
        $errors['password'] = "Field Required";
		}elseif(strlen($password) < 6){
        $errors['password'] = "short password";
        }  

 		if(empty($address)){
        $errors['address'] = "Field Required";
		}elseif(strlen($address) < 10){
        $errors['address'] = "address must be 10 or more chars";
        }  
		
		if(!isset($gender)){
        $errors['gender'] = "Field Required";
		}
			
		if(empty($url)){
        $errors['url'] = "Field Required";
		}elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){
        $errors['url'] = "invalid URL";
        }  

     if(count($errors) > 0 ){
         foreach($errors as $key => $value){

           echo '* '.$key.' : '.$value."<br>";

        }
     }else{
          
           //return view('StudentProfile',['data' => $request->except(['_token'])]);
		 
		 echo "name => ".$name."<br>"."email => ".$email."<br>"."password => ".$password."<br>"."address => ".$address."<br>"."gender => ".$gender."<br>"."url => ".$url;
     }


}



  public function StudentProfile(){

    $data = ['Root','Root@gamil.com',3.14];

    // return view('StudentProfile',['data' => $data]); 
    
   //  return view('StudentProfile')->with('data',$data); 

  return view('StudentProfile',compact('data')); 

  
  }




}

