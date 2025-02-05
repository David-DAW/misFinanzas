<div>
    @if ($attributes->has('href'))
        <a {{ $attributes->has('class') ? $attributes : $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded inline-block']) }}>
            {{ $slot }}
        </a>
    @elseif ($attributes->has('name'))
        <button type="submit" {{ $attributes->has('class') ? $attributes : $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded inline-block']) }}>
            {{ $slot }}
        </button>
    @else
        <button type="button" {{ $attributes->has('class') ? $attributes : $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded inline-block']) }}>
            {{ $slot }}
        </button>
    @endif
</div>