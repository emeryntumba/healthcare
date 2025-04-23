<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-bold mb-2">{{ $label }}:</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        @if($required) required @endif
        @if($autofocus) autofocus @endif
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error($name) border-red-500 @enderror"
    >
    @error($name)
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
    @enderror
</div>
