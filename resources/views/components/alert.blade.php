@props(['message'])
<div class="alert" class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Error</strong>
    <span class="block sm:inline">{{ $attributes->get('$message') }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg id="closeButton" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
            <title>Close</title>
            <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 12.697l-2.651 2.152a1.2 1.2 0 0 1-1.697-1.697L8.303 11 5.652 8.349a1.2 1.2 0 1 1 1.697-1.697L10 9.303l2.651-2.651a1.2 1.2 0 1 1 1.697 1.697L11.697 11l2.651 2.651a1.2 1.2 0 0 1 0 1.697z" />
        </svg>
    </span>
    @once
        @push('scripts')
            <script>
                document.querySelectorAll('#closeButton').forEach(function(closeButton) {
                    closeButton.addEventListener("click", function(e) {
                        e.target.closest('.alert').style.display = "none";
                    })
                });
            </script>
        @endpush
    @endonce


</div>
