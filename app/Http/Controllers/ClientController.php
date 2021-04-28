<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:200',
            'address'  => 'required|string|max:1000',
        ]);

        $client = Client::create($validated);

        return $client;
    }

    public function getComplaints(Client $client)
    {
        return $client->complaints;
    }
}
