@props(['name' => $name, 'value' => $value])

<div {{ $attributes->merge(['class' => 'form-group m-3']) }}>

    <select name="{{ $name }}" {{ $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) }}>
        <option disabled>Select meeting timezone</option>
        <option value="Asia/Pakistan">Asia/Pakistan</option>
        <option value="{{ $value }}">{{ $value }}</option>
    </select>

</div>
