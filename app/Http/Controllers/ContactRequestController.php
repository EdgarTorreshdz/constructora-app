<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:20',
            'company' => 'nullable|max:255',
            'message' => 'required|min:10',
            'project_type' => 'nullable|max:255',
            'budget_range' => 'nullable|numeric'
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'Debe proporcionar un email válido.',
            'message.required' => 'El mensaje es obligatorio.',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crear la solicitud de contacto
        ContactRequest::create($validator->validated());

        return redirect()->route('contact')
            ->with('success', '¡Gracias por contactarnos! Te responderemos pronto.');
    }
}
