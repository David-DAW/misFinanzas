<div>
    @if ($attributes -> has("type"))
        <input type="submit" class='class="px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"' value="ADD INCOMES"/>
    @elseif ($attributes -> has("href"))
        <a href="#" class='class="px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"'>ADD INCOMES</a>
    @endif
</div>