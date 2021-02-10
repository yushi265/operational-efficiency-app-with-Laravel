<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Progress;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user();
        $progresses = Progress::latest()->paginate(10);
        return view('progresses.index')->with(['progresses' => $progresses, 'auth' => $auth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('progresses.create')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
        $progress = new Progress();
        $progress->user_id = Auth::id();
        $progress->customer_id = $request->customer_id;
        $progress->subject = $request->status;
        $progress->body = $request->body;
        $progress->save();
        return redirect()->action('ProgressController@index');
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
    public function edit(Progress $progress)
    {
        return view('progresses.edit')->with('progress', $progress);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progress $progress)
    {
        $progress->subject = $request->status;
        $progress->body = $request->body;
        $progress->save();
        return redirect('/progresses');
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
        $query = Progress::query();
        if($request->status === null) {
            $results = $query
                ->where('body', 'like', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $results = $query
                ->where('subject', 'like', '%' . $request->status . '%')
                ->where('body', 'like', '%' . $request->search . '%')
                ->paginate(5);
        }

        return view('progresses.search')->with([
            'results' => $results,
            'request' => $request,
        ]);
    }
}
