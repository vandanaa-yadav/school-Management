<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all(); // Assuming your model name is 'Course' and follows proper naming conventions (capitalized singular form)
        return view('payments.index', ['payments' => $payments]); // Pass 'courses' variable instead of 'student'
    }
   

    public function create():View
    {
        $enrollments= Enrollment::pluck('enroll_no','id');
        return view('payments.create',compact('enrollments'));
    }
    public function show(string $id)
    {
        $payments = Payment::find($id);
        
        return view('payments.show')->with('payments',$payments);
    }

    public function edit(string $id):View
    {
        $payments = Payment::find($id);
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view('payments.edit',compact('payments','enrollments')); 
    }


    public function store(Request $request)
    {
        $input = $request->all();
        payment::create($input);
        return redirect('payments')->with('flash_message','payments Added!');
    }
    public function update(Request $request, string $id) :RedirectResponse
    {
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message','payments Updated!');
        }

        public function destroy(string $id) :RedirectResponse
        {
             Payment::destroy($id);
             return redirect('payments')->with('flash_message','payments Deleted!');
        }


}
