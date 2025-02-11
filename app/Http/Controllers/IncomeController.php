<?php

namespace App\Http\Controllers;
use App\Models\Income;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $arrayIncomes = Income::all();
        $heading = ['id', 'date', 'amount', 'category'];

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
        return view('income.index',['title' => 'My incomes', 'type' => 'incomes','tableData' => $tableData]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('income.create',['title' => 'Create Income']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income;

        $income->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');         
        $income -> amount = request() -> input('amount');
        $income -> category = request() -> input('category');
        $income -> save();

        return to_route('incomes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income = Income::find($id);
        return view('income.show', [
            'title' => 'My income',
            'id' => $id,
            'income' => $income
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::find($id);
        return view('income.edit', ['title' => 'Edit Income'], ['income' => $income], ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income = Income::find($id);

        $income->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');         
        $income -> amount = request() -> input('amount');
        $income -> category = request() -> input('category');
        $income -> save();

        return to_route('incomes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income = Income::find($id);

        $income -> delete();
        return to_route('incomes.index');
    }
}
