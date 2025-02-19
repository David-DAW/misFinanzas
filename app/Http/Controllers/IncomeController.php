<?php

namespace App\Http\Controllers;
use App\Models\Income;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arrayIncomes = Income::with('categories')->get();
        $heading = ['id', 'date', 'amount', 'category']; 
    
        $tableData = [
            'heading' => $heading,
            'data' => []
        ];
    
        foreach ($arrayIncomes as $income) {
            $data = [
                $income->id,
                $income->date,
                $income->amount,
                $income->categories ? $income->categories->name : 'Sin categoría' 
            ];
    
            $tableData['data'][] = $data;
        }
    
        return view('income.index', [
            'title' => 'My incomes',
            'type' => 'incomes',
            'tableData' => $tableData
        ]);
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

        $validateData = $request->validate([
            'amount' => ['required', 'gt:30'],
            'date' => ['required'],
            'category' => ['required']
        ]);
            
        $income->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');         
        $income -> amount = $request -> input('amount');
        $income -> category = $request -> input('category');
        $income -> save();

        return to_route('incomes.index')->with('success', 'A new income has been added!');
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


    public function edit(string $id)
    {
        $income = Income::find($id);
        return view('income.edit', ['title' => 'Edit Income'], ['income' => $income], ['id' => $id]);
    }


    public function update(Request $request, string $id)
    {
        $income = Income::find($id);
        $income->date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');         
        $income -> amount = request() -> input('amount');
        $income -> id_category = request() -> input('category');
        // $income -> category = request() -> input('category');
        $income -> save();

        return to_route('incomes.index')->with('success', 'The income ' . $id . ' has been updated');
    }


    public function destroy(string $id)
    {
        $income = Income::find($id);

        $income -> delete();
        return to_route('incomes.index')->with('warning', 'The income '. $id . ' has been deleted');
    }
}
