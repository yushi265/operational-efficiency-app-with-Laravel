<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Progress;
use App\Contract;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::latest()->get();
        return view('contracts.index')->with('contracts', $contracts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('contracts.create')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = new Contract();
        $contract->user_id = Auth::id();
        $contract->customer_id = $request->customer_id;
        $contract->contract_type = $request->contract_type;
        $contract->amount = $request->amount;
        $contract->due_date = $request->due_date;
        $contract->save();


        // $progress = new Progress();
        // $progress->user_id = Auth::id();
        // $progress->customer_id = $request->customer_id;
        // $progress->subject = '契約成立';

        // switch ($request->contract_type) {
        //     case '2':
        //         $progress->body = '普通預金￥' . number_format($request->amount) . '入金';
        //         break;
        //     case '3':
        //         $progress->body = '定期預金￥' . number_format($request->amount) . '契約';
        //         break;
        //     case '4':
        //         $progress->body = '融資￥' . number_format($request->amount) . '実行';
        //         break;
        // }
        // $progress->save();

        return redirect('/contracts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = Contract::query();
        $results = $query
            ->where('contract_type', $request->contract_type)
            ->orderby('created_at', 'desc')
            ->get();

        return view('contracts.search')->with([
            'results' => $results,
            'request' => $request,
        ]);
    }
}
