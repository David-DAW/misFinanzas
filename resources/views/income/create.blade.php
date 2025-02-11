<x-layouts.index :title="$title">
    <div class="m-2">
      <form action=" {{ route('incomes.store') }}" method="POST">
        @csrf
            <label for="date">Fecha:</label> <br>
            <input name="date" type="text"> <br>

            <label for="amount">Cantidad:</label> <br>
            <input name="amount" type="number"> <br>

            <label for="category">Categoría:</label> <br>
            <input name="category" type="text"> <br>

            <button type="submit">Send</button>
      </form>
    </div>
  </x-layouts.index>
