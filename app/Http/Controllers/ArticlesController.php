<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Article;
use App\Models\Student;
use App\Models\Course;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // to show all the data
        $students = Student::paginate(1000);
        return view('Student/blog',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Student/addform");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    $request ->validate([
        'lastname' => 'required',
        'firstname' => 'required',
        'middlename' => 'required',
        'birthdate' => 'required',
        'sex' => 'required',
        'address' => 'required',
        'phone' => 'required|min:11|max:11',
        
        ]);

        Student::create(["lastname" => $request ->lastname,
         "firstname" => $request -> firstname, "middlename" =>$request -> middlename,
         "birthdate" => $request -> birthdate, "sex" => $request -> sex, 
         "address" => $request -> address, "phone" => $request -> phone]
        );
        return redirect("/blogs") ->with("message","Student Succesfully Added");
    
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //is to see the single data
        $students = Student::find($id);
        return view('Student/show') -> with ('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //to edit data
       $students = Student::find($id);
       return view('Student/editform') -> with ("students", $students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request ->validate([
            'lastname' => 'required',
        'firstname' => 'required',
        'middlename' => 'required',
        'birthdate' => 'required',
        'sex' => 'required|min:1|max:1',
        'address' => 'required',
        'phone' => 'required|min:11|max:11',
            ]);
        //
        /*$article = Article::find($id);
        $article -> title = $request -> title;
        $article -> content = $request ->content;    
        $article -> save();*/

        $student = Student::find($id);
        $student -> lastname = $request ->lastname;
        
        $student -> firstname = $request ->firstname;
        $student -> middlename = $request ->middlename;
        $student -> birthdate = $request ->birthdate;
        $student -> sex = $request ->sex;
        $student -> address = $request ->address;
        $student -> phone = $request ->phone;
        $student -> save();

        return redirect("/blogs") ->with("message","Article Succesfully update");
    
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Student::destroy($id);
        return redirect("/blogs") ->with("message","Student Deleted");
    
    }
}
