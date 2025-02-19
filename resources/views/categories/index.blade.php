<x-layouts.index :title="$title">

  <div class="relative overflow-x-auto shadow shadow-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                @foreach ($tableData['heading'] as $heading)
                    <th scope="col" class="px-6 py-3">
                        {{$heading}}
                    </th>    
                @endforeach
                <th>&nbsp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData['data'] as $index => $row)
                <!-- Alternating row colors between white and light blue -->
                {{-- @dump($row); --}}
                <tr class="{{ $loop->even ? 'bg-white' : 'bg-blue-50' }} border-b">
                    @foreach ($row as $cell)
                        <!-- First column as <th> and others as <td> -->
                        @if ($loop->first)
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$cell}}
                            </th>
                        @else
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                {{$cell}}
                            </td>
                        @endif                        
                    @endforeach

                    <td>
                      <button><a href="{{ route($type . '.show', ['id' => $row[0]]) }}">Show</a></button>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div> <br>
  {{-- <div class="m-2">
    <x-button href="{{ route($type . '.create') }}">Add Category</x-button>
  </div> --}}

</x-layouts.index>