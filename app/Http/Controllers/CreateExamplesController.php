<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Example;
use Illuminate\Http\Request;

class CreateExamplesController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        Example::create([
            'name' => $request->name,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'priority' => $request->priority,
            'status' => $request->status,
            'user_id' => $request->user_id,
        ]);

        return redirect(route('createExamplePage'));
    }
}
