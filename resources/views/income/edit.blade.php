<x-layouts.index :title="$title">
  <div class="m-2">
      @if ($errors->any())
          <x-alert type="error" message="'Parece que ha habido algunos problemas'" />
      @endif

      <form action=" {{ route('incomes.update', $income->id) }}" method="POST" class="max-w-sm mx-auto">
          @csrf @method('patch')
          <div class="mb-4">
              <label for="email"
                  class="block mb-2 text-base font-medium text-black-900 dark:text-black">Amount:</label>
              <input type="number" name="amount" step="any"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  value="{{ old('amount', $income->amount) }}"/>
              @error('amount')
                  <div class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</div>
              @enderror
          </div>

          <div class="mb-4">
            <label for="date"
                class="block mb-2 text-base font-medium text-black-900 dark:text-black">Date:</label>
            <input type="text" name="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ old('date', $income->date) }}"/>
            @error('date')
                <div class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="countries" class="block mb-1 text-base font-medium text-gray-900 dark:text-black">Payment</label>
            <select name="category"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="1" {{old('payment', $income->categories->name == 'Marketing' ? 'selected' : '')}}>Marketing</option>
                <option value="2" {{old('payment', $income->categories->name == 'Sales' ? 'selected' : '')}}>Sales</option>
                <option value="3" {{old('payment', $income->categories->name == 'Tickets' ? 'selected' : '')}}>Tickets</option>
            </select>
        </div>
        
          <button type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
          </button>
      </form>
  </div>
</x-layouts.index>




{{-- <x-layouts.index :title="$title">
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
  </x-layouts.index> --}}