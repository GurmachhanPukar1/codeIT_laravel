<?php

use App\Http\Controllers\CEOController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PageController;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class,"welcome"])->name("home");

Route::get('/about',[PageController::class,"about"])->name("about");

Route::get('/contact', [PageController::class,"contact"])->name("contact");

Route::post('/save-company', [CompanyController::class, "save_company"])->name("save_company");

Route::delete('/delete-company/{id}', [CompanyController::class, "delete_company"])->name("delete_company");

Route::get('/edit-company/{id}',[CompanyController::class, "edit_company"])->name("edit_company");

Route::patch('/update-company/{id}',[CompanyController::class, "update_company"])->name("update_company");


//CRUD operation
//Create - post
//Read - get
//Update - put/patch
//Delete - delete

Route::resource("employee",EmployeeController::class)->names('employee');

Route::resource("manager",ManagerController::class)->names('manager');

