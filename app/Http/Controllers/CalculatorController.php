<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculateAmount(Request $request) {
        if ($request->input('amount') && $request->input('amount') !== "") {
            $amount = ($request->input('amount') * 50) / 12;
            return response()->json([
               'status' => 'success',
               'statusCode' => 200,
               'message' => 'Input calculated successfully',
               'calculated_amount' => $amount
            ]);
        }
    }
}
