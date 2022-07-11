@props(['href'])

<button {{ $attributes->merge(['class' => 'rounded text-white font-semibold px-4 py-2'])}}>
    <a>
        {{ $slot }}
    </a>
</button>
