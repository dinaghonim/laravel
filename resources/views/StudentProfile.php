
<?php

 function store(Request $request){
 function StudentProfile(){

    $data = ['Root','Root@gamil.com',3.14];

    //return view('StudentProfile',['data' => $data]); 
    
    //return view('StudentProfile')->with('data',$data); 

 return view('StudentProfile',compact('data')); 
}
}

?>