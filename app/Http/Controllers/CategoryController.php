<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $heading = ['id', 'name'];
        $data = [];

        $tableData = [
            'heading' => $heading,
            'data' => []
        ];

        foreach ($categories as $category) {
            $data = [
                $category->id,
                $category->name
            ];

            $tableData['data'][] = $data;
        }

        return view('categories.index', [
            'title' => 'My Categories',
            'type' => 'categories',
            'tableData' => $tableData
        ]);
    }


    public function show(string $id)
    {
        $category = Category::find($id);

        $incomes = Income::with('categories')->where('id_category', $id)->get();
        
        // foreach ($incomes as $income) {
        //     dump($income);
        // }

        $heading = ['id', 'date', 'amount', 'category'];
        $tableData = [
            'heading' => $heading,
            'data' => []
        ];

        foreach ($incomes as $income) {
            $data = [
                $income->id,
                $income->date,
                $income->amount,
                $income->categories->name
            ];
    
            $tableData['data'][] = $data;
        }


        return view('categories.show', ['title' => 'Category ' . $category->name, 'tableData' => $tableData, 'type' => 'incomes']);
    }
}
