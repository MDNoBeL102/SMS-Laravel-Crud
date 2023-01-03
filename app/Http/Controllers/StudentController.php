<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Department;
use App\Models\Section;


use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{

    public $student;

    public function index()
    {
        return view('crud.addStudent');
//        return view('crud.add', [
//            'departments' => Category::where('status', 1)->get()
//        ]);
    }
    public function saveStudent(Request $request){
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->phone = $request->phone;
        $this->student->email = $request->email;
        $this->student->department_id = $request->department_id;
        $this->student->section_id = $request->section_id;
        $this->student->address = $request->address;
        if($request->file('image')){
            $this->student->image = $this->saveImage($request);
        }
        $this->student->save();
        //return back();
        return redirect(route('manage.student'));
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='asset/image/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
//    public function manageStudent(){
//        $this->student =Student::all();
//        return view('crud.manageStudent',[
//            'students' => $this->student,
//        ]);
//
//    }
    public function deleteStudent(Request $request){
        $this->student = Student::find($request->student_id);
        if($this->student->image != null){
            unlink($this->student->image);
        }
        $this->student->delete();
        return redirect(route('manage.student'));
    }



    public function manageStudent()
    {
        $this->student = DB::table('students')
            ->join('departments', 'students.department_id', '=', 'departments.id')
            ->join('sections', 'students.section_id', '=', 'sections.id')
            ->select('students.*', 'departments.*' , 'sections.*')
            ->get();

//        // $this->student= student::all();

        return view('crud.manageStudent', [
            'students' => $this->student,
        ]);
   }

    public function editStudent($id)
    {
        $this->student = Student::find($id);
        return view('crud.editStudent', [
            'student' => $this->student
        ]);
    }

    public function updateStudent(Request $request)
    {

        $this->student = Student::find($request->student_id);
        $this->student->name = $request->name;
        $this->student->phone = $request->phone;
        $this->student->email = $request->email;
        $this->student->department_id = $request->department_id;
        $this->student->section_id = $request->section_id;
        $this->student->address = $request->address;

        if ($request->file('image')) {
            if ($this->student->image != null) {
                unlink($this->student->image);
            }
            $this->student->image = $this->saveImage($request);
        }
        $this->student->save();
        return redirect(route('manage.student'));
    }
//    ***************** Department*****************
    public function showDepartment(){
        return view('crud.addDepartment');
    }

    public function saveDepartment(Request $request){
        $this->department = new Department();
        $this->department->department_name = $request->department_name;
        $this->department->department_code = $request->department_code;

        $this->department->save();
        return redirect(route('manage.department'));
    }

    public function manageDepartment(){
        $this->department =Department::all();
        return view('crud.manageDepartment',[
            'departments' => $this->department,
        ]);

    }
//    **************** Section*************
    public function showSection(){
        return view('crud.addSection');
    }

    public function saveSection(Request $request){
        $this->section = new Section();
        $this->section->section_name = $request->section_name;

        $this->section->save();
        return redirect(route('manage.section'));
    }

    public function manageSection(){
        $this->section =Section::all();
        return view('crud.manageSection',[
            'sections' => $this->section,
        ]);

    }



}

