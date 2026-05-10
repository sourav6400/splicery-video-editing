<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'company' => ['nullable', 'string', 'max:160'],
            'budget' => ['nullable', 'string', 'max:40'],
            'service' => ['required', 'in:youtube,shorts,saas,ads'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        Booking::create($data);

        return back()->with('success', 'Thanks! A strategist will reach out within 24 hours.');
    }
}
