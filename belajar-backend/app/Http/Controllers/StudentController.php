<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $student = Student::with('class')
            ->where('name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('gender', $keyword)
            ->orWhere('nim', 'LIKE', '%'.$keyword.'%')
            ->orWhereHas('class', function($query) use($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })
            ->paginate(10);

        return view('student', ['studentList' => $student]);
    }

    public function show($id)
    {
        $student = Student::with(['class.roomTeachers', 'extracurriculars'])
            ->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    public function store(StudentCreateRequest $request)
    {
        $newName = '';
        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
        $student = Student::create($request->all());

        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new data success!');
        }

        return redirect('/student');
    }

    public function edit(Request $request, $id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id', 'name']);
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update($request->all());

        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'edit data success!');
        }

        return redirect('/student');
    }

    public function delete ($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy ($id)
    {
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();

        if($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete data success!');
        }

        return redirect('/student');
    }

    public function deletedStudent()
    {
        $deletedStudent = Student::onlyTrashed()->get();
        return view('student-deleted', ['student' => $deletedStudent]);
    }

    public function restore ($id)
    {
        $deletedStudent = Student::withTrashed()->where('id', $id)->restore();

        if($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore data success!');
        }

        return redirect('/student');
    }
    
}
