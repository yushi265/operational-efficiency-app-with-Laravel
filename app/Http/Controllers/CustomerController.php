<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('customers.index')->with('customers', $customers);
    }

    public function create() {
        return view('customers.create');
    }

    public function store(CustomerRequest $request) {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->birth = $request->birth;
        $customer->tel = $request->tel;
        $customer->address = $request->address;
        $customer->mail = $request->mail;
        $customer->job = $request->job ;
        $customer->company = $request->company ;
        $customer->save();
        return redirect('/customer');
    }
}
