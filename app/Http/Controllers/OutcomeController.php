<?php

namespace App\Http\Controllers;
use App\Models\Outcome;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $arrayOutcomes = Outcome::all();
        $heading = ['id','date', 'amount', 'payment'];

        $tableData = [
            'heading' => $heading,
            'data' => []
        ];

        foreach ($arrayOutcomes as $value) {
            $valoresArray = $value->getOriginal();
            $data = [];

            foreach ($heading as $key) {
                $data[] = $valoresArray[$key];
            }

            $tableData['data'][] = $data;

        }
        return view('outcome.index',['title' => 'My spendings', 'type' => 'outcomes','tableData' => $tableData]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('outcome.create', ['title' => 'Create new spending']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $outcome = new Outcome;

        $validateData = $request -> validate([
            'amount' => ['required', 'gt:30'],
            'date' => ['required'],
            'payment' => ['required']
        ]);

        $outcome-> date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d'); 
        $outcome -> amount = $request -> input('amount');
        $outcome -> payment = $request -> input('payment');
        $outcome -> save();

        return to_route('outcomes.index')->with('success', 'A new outcome has been registered!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $outcome = Outcome::find($id);
        return view(
            'outcome.show', [
            'title' => 'My spending',
            'id' => $id,
            'outcome' => $outcome
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $outcome = Outcome::find($id);
        return view('outcome.edit', ['title' => 'Edit spending', 'outcome' => $outcome]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $outcome = Outcome::find($id);
        $outcome-> date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d'); 
        $outcome -> amount = $request ->input('amount');
        $outcome -> payment = $request -> input('payment');
        $outcome -> save();

        return to_route('outcomes.index')->with('success', 'The outcome ' . $id . ' has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outcome = Outcome::find($id);

        $outcome -> delete();
        return to_route('outcomes.index')->with('warning', 'The outcome ' . $id . ' has been deleted');    
    }
}
