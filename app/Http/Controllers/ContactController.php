<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;

class ContactController extends Controller
{
    /**
     * Muestra la página de contacto.
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Guarda una nueva solicitud de contacto.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'nullable|string|max:20',
            'company'      => 'nullable|string|max:255',
            'message'      => 'required|string',
            'project_type' => 'nullable|string|max:255',
            'budget_range' => 'nullable|numeric|min:0',
        ]);

        ContactRequest::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Gracias por contactarnos. Te responderemos pronto.');
    }
}
