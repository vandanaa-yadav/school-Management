<?php


namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\Enrollment;
use App\Models\student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all(); // Assuming your model name is 'Enrollment' and follows proper naming conventions (capitalized singular form)
        return view('enrollments.index', ['enrollments' => $enrollments]); // Pass 'enrollments' variable instead of 'student'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollments.create',compact('batches','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message','student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments',$enrollments);   //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) :RedirectResponse
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message','student Updated!');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) :RedirectResponse
    {
        Enrollment::destroy($id);
         return redirect('enrollments')->with('flash_message','student Deleted!');
    }
}
