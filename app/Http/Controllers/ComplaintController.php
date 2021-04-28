<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'     => 'required|string|max:150',
            'text'      => 'required|string|max:3000',
            'client_id' => 'required|integer',
        ]);

        $complaint = Complaint::create($validated);

        return $complaint;
    }

    public function update_status(Complaint $complaint)
    {
        $complaint->update(['in_work' => 1]);

        return $complaint;
    }
}
