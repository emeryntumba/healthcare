@if($href)
    <a href="{{ $href }}" class="bg-pink-500 text-white py-2 px-8 text-sm md:px-6 md:py-2 md:text-base rounded-lg shadow-md hover:bg-pink-600 transition duration-300">
        {{ $label }}
    </a>
@else
    <button
        type="{{ $type }}"
        class="bg-pink-500 text-white py-2 px-8 text-sm md:px-6 md:py-2 md:text-base rounded-lg shadow-md hover:bg-pink-600 transition duration-300">
        {{ $label }}
    </button>
@endif
