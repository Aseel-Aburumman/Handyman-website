<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;

class AdminAgreementController extends Controller
{
    // Show the list of agreements
    public function index()
    {
        $agreements = Agreement::all();
        return view('admin.agreements.index', compact('agreements'));
    }

    // Show the form for creating a new agreement
    public function create()
    {
        return view('admin.agreements.create');
    }

    // Store a newly created agreement
    public function store(Request $request)
    {
        $request->validate([
            'agreement_type' => 'required|string',
            'content' => 'required|string',
        ]);

        Agreement::create($request->all());
        return redirect()->route('admin.agreements.index')->with('success', 'Agreement created successfully.');
    }

    // Show the form for editing an existing agreement
    public function edit($id)
    {
        $agreement = Agreement::findOrFail($id);
        return view('admin.agreements.edit', compact('agreement'));
    }

    // Update an existing agreement
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $agreement = Agreement::findOrFail($id);
        $agreement->update($request->all());
        return redirect()->route('admin.agreements.index')->with('success', 'Agreement updated successfully.');
    }

    // Delete an agreement
    public function destroy($id)
    {
        $agreement = Agreement::findOrFail($id);
        $agreement->delete();
        return redirect()->route('admin.agreements.index')->with('success', 'Agreement deleted successfully.');
    }
}
