<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\QuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function send(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|max:255',
                'phone'   => 'required|string|max:50',
                'service' => 'required|string|max:100',
                'size'      => 'nullable|string|max:100',
                'frequency' => 'nullable|string|max:100',
                'message'   => 'nullable|string|max:1000',
            ]);

            Mail::to('glowandharmony1@gmail.com')->send(new QuoteMail($validated));

            return response()->json([
                'status'  => 'success',
                'message' => 'Quote sent successfully',
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('Quote email error: ' . $e->getMessage());

            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to send quote',
            ], 500);
        }
    }
}
