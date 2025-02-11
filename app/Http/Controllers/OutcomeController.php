<?php

namespace App\Http\Controllers;
use App\Models\Outcome;

use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $arrayOutcomes = Outcome::all();
        $heading = ['date', 'amount', 'payment'];

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

        // dump($tableData);

        // $tableData = [
        //     'heading' => [
        //         'date','category','amount'
        //     ],
        //     'data' => [
        //         ['12/12/2012','salary','2500'],
        //         ['12/01/2013','salary','2500'],
        //         ['12/02/2013','salary','2550']
        //     ]

        // ]; 
        //Aquí la lógica de negocio para el index
        return view('outcome.index',['title' => 'My outcomes', 'type' => 'outcomes','tableData' => $tableData]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return '<p>Esta es la página del create de incomes</p>';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
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
        //
    }
}
