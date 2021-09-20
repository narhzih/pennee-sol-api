<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function getFaq(): \Illuminate\Http\JsonResponse
    {
        $faqs = Faq::all();
        return response()->json([
            'status' => 'success',
            'statusCode' => 200,
            'message' => 'Fetch successful',
            'faqs' => $faqs
        ]);
    }
}
