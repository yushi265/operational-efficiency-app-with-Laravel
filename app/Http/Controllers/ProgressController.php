<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Progress;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProgressRequest;

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
    public function store(ProgressRequest $request, Customer $customer)
    {
        $progress = new Progress();
        $progress->user_id = Auth::id();
        $progress->customer_id = $request->customer_id;
        $progress->status = $request->status;
        $progress->body = $request->body;
        $progress->save();
        return redirect('/progresses');
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
    public function update(ProgressRequest $request, Progress $progress)
    {
        $progress->status = $request->status;
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
    public function destroy(Progress $progress)
    {
        $progress->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $query = Progress::query();
        $search = $request->input('search');
        $status = $request->input('status');

        if ($request->filled('status')) {
            $query->where(function ($query) use ($status) {
                    $query->where('status', $status );
            });
        }

        if ($request->filled('search')) {
            $query
                ->where('body', 'like', '%' . $search . '%')
                ->orWhereHas('user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->orWhereHas('customer', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
        }


        $progresses = $query->latest()->paginate(10);

        return view('progresses.index')->with([
            'progresses' => $progresses,
            'request' => $request,
        ]);
    }
}
