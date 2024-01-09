<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\teacher;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all(); // Assuming your model name is 'Teacher' and follows proper naming conventions (capitalized singular form)
        return view('teachers.index', ['teachers' => $teachers]); // Pass 'teachers' variable instead of 'student'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message','student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.show')->with('teachers',$teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $teachers = Teacher::find($id);
        return view('teachers.edit')->with('teachers',$teachers);   //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) :RedirectResponse
    {
        $teachers = Teacher::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teachers')->with('flash_message','student Updated!');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) :RedirectResponse
    {
        Teacher::destroy($id);
         return redirect('teachers')->with('flash_message','student Deleted!');
    }
}
