@props(['href' => $href])

<button {{ $attributes->merge(['class' => 'rounded text-white font-semibold px-4 py-2'])}}>
    <a href="{{ $href }}">
        {{ $slot }}
    </a>
</button>
