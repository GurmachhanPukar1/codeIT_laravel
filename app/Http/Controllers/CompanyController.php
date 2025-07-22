<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function welcome()
    {
        $companies = Company::all();
        return view('welcome', compact('companies'));
    }



    public function save_company(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $logo = $request->logo;
        if ($logo) {
            $file_name = uniqid() . "." . $logo->getClientOriginalExtension();
            $logo->move("images", $file_name);
            $company->logo = "images/" . $file_name;
        }
        $company->save();
        return redirect("/");
    }


    public function delete_company($id)
    {
        // using route paramenter after the actual route
        Company::find($id)->delete();
        return redirect("/");
    }



    public function edit_company($id)
    {
        $company = Company::find($id);

        return view("edit_company", compact('company'));
    }


    public function update_company(Request $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $logo = $request->logo;
        if ($logo) {
            $file_name = uniqid() . "." . $logo->getClientOriginalExtension();
            $logo->move("images", $file_name);
            $company->logo = "images/" . $file_name;
        }
        $company->save();
        return redirect("/");
    }
}
