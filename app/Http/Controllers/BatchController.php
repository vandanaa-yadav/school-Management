<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Batch;
use App\Models\Course;

class BatchController extends Controller
    //
    {
        /**
         * Display a listing of the resource.
         */
        public function index():View
        {
            $batches = Batch::all(); // Assuming your model name is 'Batch' and follows proper naming conventions (capitalized singular form)
            return view('batches.index', ['batches' => $batches]); // Pass 'batches' variable instead of 'student'
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create():View
        {
            $batches = Course::pluck('name','id');
            return view('batches.create',compact('batches'));
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $input = $request->all();
            Batch::create($input);
            return redirect('batches')->with('flash_message','student Added!');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $batches = Batch::find($id);
            return view('batches.show')->with('batches',$batches);
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id):View
        {
            $batches = Batch::find($id);
            return view('batches.edit')->with('batches',$batches);   //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id) :RedirectResponse
        {
            $batches = Batch::find($id);
            $input = $request->all();
            $batches->update($input);
            return redirect('batches')->with('flash_message','batches Updated!');
            }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id) :RedirectResponse
        {
            Batch::destroy($id);
             return redirect('batches')->with('flash_message','batches Deleted!');
        }
    }
