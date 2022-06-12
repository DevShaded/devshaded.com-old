<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function __invoke()
    {
        // Get all the faqs
        $faqs = Faq::all();

        // Send the faqs to the front-end
        return Inertia::render('About', [
            'faqs' => $faqs ?? null
        ]);
    }
}
