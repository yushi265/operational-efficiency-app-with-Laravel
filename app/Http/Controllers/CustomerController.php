<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Customer;
use App\Progress;
use App\Contract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::getAllCustomer();
        return view('customers.index')->with('customers', $customers);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->birth = $request->birth;
        $customer->tel = $request->tel;
        $customer->address = $request->address;
        $customer->mail = $request->mail;
        $customer->job = $request->job;
        $customer->company = $request->company;
        $customer->save();
        return redirect()->action('CustomerController@index');
    }

    public function show(Customer $customer)
    {
        $auth_id = Auth::id();
        $customer->age = Customer::getAge($customer->birth);
        $deposit_status = Contract::getDepositStatus($customer->id);

        $suggests = Customer::getSuggests($customer->age, $deposit_status);

        return view('customers.show')->with(['auth_id' => $auth_id, 'customer' => $customer, 'deposit_status' => $deposit_status, 'suggests' => $suggests]);
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit')->with('customer', $customer);
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->name = $request->name;
        $customer->ruby = $request->ruby;
        $customer->gender = $request->gender;
        $customer->birth = $request->birth;
        $customer->tel = $request->tel;
        $customer->address = $request->address;
        $customer->mail = $request->mail;
        $customer->job = $request->job;
        $customer->company = $request->company;
        $customer->save();
        return redirect()->action('CustomerController@show', $customer);
    }

    public function delete() {}
}
