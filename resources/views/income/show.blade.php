<x-layouts.index :title="$title">
    <div class="m-2">
        <h2>Id: {{$income->id}}</h2>
        <h2>Fecha: {{$income->date}}</h2>
        <h2>Cantidad: {{$income->amount}}</h2>
        <h2>Categoría: {{$income->category}}</h2>
    </div>
    <x-button href="{{ route('incomes.index') }}">Inicio</x-button>
  </x-layouts.index>









{{-- <x-layouts.index :title="$title">
    <div class="m-2">
            <label for="date">Fecha:</label> <br>

            <label for="amount">Cantidad:</label> <br>
            <input name="amount" type="number"> <br>

            <label for="category">Categoría:</label> <br>
            <input name="category" type="text"> <br>

            <button type="submit">Send</button>
    </div>
  </x-layouts.index> --}}