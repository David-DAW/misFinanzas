<x-layouts.index :title="$title">
    {{-- @dd($income) --}}
    
    <x-table :type='$type' :tableData='$tableData'  />

    <x-button href="{{ route('categories.index') }}">Inicio</x-button>
  </x-layouts.index>
