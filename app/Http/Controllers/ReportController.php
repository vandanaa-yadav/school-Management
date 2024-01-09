<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
class ReportController extends Controller
{
  public function report1($pid){
     $payment = Payment::find($pid);
     $pdf = App::make('dompdf.wrapper');
     $print = "<div style='margin:20px; padding:20px'>";
     $print .= "<h1 align='center'>Payment Receipt</h1>";
     $print .= "</hr>";
     $print .= "<p>Receipt No : <b>" . $pid . "</b></p>";
     $print .= "<p>Date  : <b>" . $payment->paid_date . "</b></p>";
     $print .= "<p>Enrollment No : <b>" . $payment->enrollment->enroll_no . "</b></p>";
     $print .= "<p>Student Name : <b>" . $payment->enrollment->student->name . "</b></p>";
     $print .= "<hr/>";
     $print .= "<table style='width:100%;'>";
     $print .= "<tr>";
     $print .= "<td>Batch</td>";
     $print .= "<td>Amount</td>";
     $print .= "</tr>";

     $print .= "<tr>";
     $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
     $print .= "<td><h3>" . $payment->amount . "</h3></td>";
   
     $print .= "</tr>";
     $print .= "</table";
     $print .= "<hr/>";
    //  $print .= "<span>Print By: <b>". Auth::user()->name . "</b></span>";
     $print .= "<span>Printed Date: <b>". date('Y-m-d') . "</b></span>";
     $print .= "</div>";
     $pdf->loadHtml($print);
     return $pdf->stream();
  }

// public function report1($pid)
//     {
//         $payment = Payment::find($pid);

//         if (!$payment) {
//             // Handle case when payment with $pid is not found
//             abort(404, 'Payment not found');
//         }

//         $pdf = App::make('dompdf.wrapper');
//         $print = "<div style='margin:20px; padding:20px'>";
//         $print .= "<h1 align='center'>Payment Receipt</h1>";
//         $print .= "<hr/>";
//         $print .= "<p>Receipt No: <b>" . $pid . "</b></p>";
//         $print .= "<p>Date: <b>" . $payment->paid_date . "</b></p>";

//         if ($payment->enrollment) {
//             $enrollment = $payment->enrollment;
//             $print .= "<p>Enrollment No: <b>" . $enrollment->enroll_no . "</b></p>";

//             // if ($enrollment->student) {
//             //     $student = $enrollment->student;
//             //     $print .= "<p>Student Name: <b>" . $student->name . "</b></p>";
//             // }
//         }

//         $print .= "<hr/>";
//         $print .= "<table style='width:100%;'>";
//         $print .= "<tr>";
//         $print .= "<td>Description</td>";
//         $print .= "<td>Amount</td>";
//         $print .= "</tr>";

//         $print .= "<tr>";
//         $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
//         $print .= "<td><h3>" . $payment->amount . "</h3></td>";
//         $print .= "</tr>";

//         $print .= "</table>";
//         $print .= "<hr/>";
//         // $print .= "<span>Print By: <b>" . Auth::user()->name . "</b></span>";
//         $print .= "<span>Printed Date: <b>" . date('Y-m-d') . "</b></span>";
//         $print .= "</div>";

//         $pdf->loadHtml($print);
//         return $pdf->stream();
//     }
}
 