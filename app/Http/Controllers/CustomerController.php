<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::getAllCustomer();
        return view('customers.index')->with('customers', $customers);
    }

    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
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
        return redirect()->route('index');
    }

    public function show(Customer $customer) {
        $customer->age = Customer::getAge($customer->birth);
        return view('customers.show')->with('customer', $customer);
    }

    public function edit(Customer $customer) {
        return view('customers.edit')->with('customer', $customer);
    }

    public function update(Request $request, Customer $customer) {
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->birth = $request->birth;
        $customer->tel = $request->tel;
        $customer->address = $request->address;
        $customer->mail = $request->mail;
        $customer->job = $request->job;
        $customer->company = $request->company;
        $customer->save();
        return redirect()->route('show', ['customer' => $customer->id]);
    }
}
