@props(['active' => false])

<a {{ $attributes->merge(['class' => $active? 'text-green-600 font-bold' : '']) }} > {{ $slot }}</a>