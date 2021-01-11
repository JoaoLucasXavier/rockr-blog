<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    public function creat(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();

            return response()->json(['New contact' => $contact], Response::HTTP_CREATED);
        } catch (Exception $e) {
            return response()->json(['Error' => $e], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
