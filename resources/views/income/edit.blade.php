<x-layouts.index :title="$title">
    <div class="m-2">
      <form action="{{ route('incomes.update', $income->id) }}" method="POST">
        @csrf @method('PATCH')
            <label for="date">Fecha:</label> <br>
            <input name="date" type="text" value="{{ old('date', $income->date) }}"> <br>

            <label for="amount">Cantidad:</label> <br>
            <input name="amount" type="number" value="{{ old('amount', $income->amount) }}"> <br>

            <label for="category">Categoría: </label> <br>
            <input name="category" type="text" value="{{ old('category', $income->category) }}"> <br>

            <button type="submit">Send</button>
      </form>
    </div>
  </x-layouts.index>