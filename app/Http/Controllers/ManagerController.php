<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::all();
        return view("manager.index", compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('manager.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $managers = new Manager();
        $managers->name = $request->name;
        $managers->email = $request->email;
        $managers->phone = $request->phone;
        $managers->company_id = $request->company;

        $managers->save();
        return redirect()->route('manager.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manager = Manager::find($id);
        $companies = Company::all();
        return view("manager.edit", compact('manager', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Manager::find($id)->delete();
        return redirect()->route('manager.index');
    }
}
