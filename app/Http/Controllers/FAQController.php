<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(Request $request) {
        $question = $request->route()->getName();

        return view('faq', [
            'title' => __("faqs.$question.title"),
            'description' => __("faqs.$question.description")
        ]);
    }
}
