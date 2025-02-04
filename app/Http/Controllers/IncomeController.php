<?php

namespace App\Http\Controllers;
use App\Models\Income;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $arrayIncomes = Income::all();
        $heading = ['date', 'amount', 'category'];

        $tableData = [
            'heading' => $heading,
            'data' => []
        ];

        foreach ($arrayIncomes as $value) {
            $valoresArray = $value->getOriginal();
            $data = [];

            foreach ($heading as $key) {
                $data[] = $valoresArray[$key];
            }

            $tableData['data'][] = $data;

        }

        // dump($tableData);

        //Aquí la lógica de negocio para el index
        return view('income.index',['title' => 'My incomes','tableData' => $tableData]);
        
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
