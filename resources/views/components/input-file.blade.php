@props(['disabled' => false, 'name' => '', 'value' => '', 'label' => 'Arquivo'])

<div class="mb-3 w-96">
    <x-label for="{{ $name }}" value="{{ $label }}" />
    <input
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none']) }}
        type="file" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}">
</div>
