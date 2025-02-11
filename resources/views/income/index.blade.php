<x-layouts.index :title="$title">
  <x-table :type="$type" :tableData="$tableData" />
  <div class="m-2">
    <x-button href="{{ route($type . '.create') }}">Add income</x-button>
  </div>
</x-layouts.index>

