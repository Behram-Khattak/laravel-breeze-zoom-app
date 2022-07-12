@props(['disabled' => false, 'type' => $type, 'name' => $name, 'placeholder' => $placeholder])

<div {{ $attributes->merge(['class' => 'form-group m-3']) }}>

    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>

</div>
