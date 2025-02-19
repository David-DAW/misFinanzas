<x-layouts.index :title="$title">
    <div class="m-2">
        <h2>Id: {{$outcome->id}}</h2>
        <h2>Fecha: {{$outcome->date}}</h2>
        <h2>Cantidad: {{$outcome->amount}}</h2>
        <h2>Categoría: {{$outcome->payment}}</h2>
    </div>
    <x-button href="{{ route('outcomes.index') }}">Inicio</x-button>
  </x-layouts.index>