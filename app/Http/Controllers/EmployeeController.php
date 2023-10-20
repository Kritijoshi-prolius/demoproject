<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Employee;
use Exception;

class EmployeeController extends Controller
{
    public function create(){
        $employees = Employee::all();
        $url =url('/employee');
       $data=compact('url');
        return view('create');
        
        }

    public function store(Request $request){


            $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'address' => 'required|string', 
            'dob' => 'required|date',
            'state' => 'required|string', 
            'country' => 'required|string', 
            'password' => 'required|string|min:8',
        ]);
        if ($validatedData) {
        //inserting the record
        $employee = new Employee;
        $employee->name = strtoupper($request ['name']);
        $employee->email =$request['email'];
        $employee->gender = $request['gender'];
        $employee->address = strtoupper($request['address']);
        $employee->dob = $request['dob'];
        $employee->state = strtoupper($request['state']);
        $employee->country = strtoupper($request['country']);
        $employee->password = strtoupper($request['password']);
        $employee->save();
        return redirect('/employee');
    
    }
}


    public function view(Request $request)
    {
            $employees = Employee::all();
        
    $data = compact('employees');
    
    return view('employee-view')->with($data);  
        }
        public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        
        $employees = Employee::where('name', 'like', "%{$searchTerm}%")->get();

        $data = compact('employees');
       
     
        return response()->json($employees);
     

    }

    public function delete($id)
      { 
            $employee= Employee::find($id);
        
            if (!is_null($employee)) {
                $employee->delete();
            }
        return redirect('employee');
        }
    
public function edit($id)
{
    $employee= Employee::find($id);
    if (is_null($employee)){
        return redirect('employee');
    }else {
        $title="Update employee";
        $url= url('/employee/update')."/". $id;
        $data= compact('employee','url');
        return view ('employee')->with($data);  
}
      
}

public function update($id,Request $request)
{
    $employee = Employee::find($id);
    $employee->name = $request['name'];
    $employee->email = $request['email'];
    $employee->gender = $request['gender'];
    $employee->address = $request['address'];
    $employee->dob = $request['dob'];
    $employee->state = $request['state'];
    $employee->country = $request['country'];
 
   
    $employee->save();
    return redirect ('employee'); 
}          

public function showUploadForm()
{
    return view('upload');
}


public function upload(Request $request)
{
    $this->validate($request, [
        'file' => 'required|mimes:txt',
    ]);
 
    $file = $request->file('file');
    $path = $file->store('temp');

    $contents = file_get_contents(storage_path("app/$path"));
    $data = explode("\n", $contents); 
foreach ($data as $line) {
   
    $fields = explode(',', $line); 
if (count($fields)>7)
    {Employee::create([
        'name' => strtoupper($fields[0]),
        'email' => $fields[1],
        'gender' => strtoupper($fields[2]),
        'address' => $fields[3],
        'dob' => $fields[4],
        'state' => strtoupper($fields[5]),
        'country' => strtoupper($fields[6]),
        'password'=> $fields[7],
        

    ]);}


}
return redirect('employee');
 



}
}
