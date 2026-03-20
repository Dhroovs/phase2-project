<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('admin.dashboard', compact('records'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Record::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'Pending',
        ]);

        return redirect('/admin/dashboard')->with('success', 'Record created successfully!');
    }

    public function edit($id)
    {
        $record = Record::findOrFail($id);
        return view('admin.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $record = Record::findOrFail($id);
        $record->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/admin/dashboard')->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        $record = Record::findOrFail($id);
        $record->delete();

        return redirect('/admin/dashboard')->with('success', 'Record deleted successfully!');
    }
}