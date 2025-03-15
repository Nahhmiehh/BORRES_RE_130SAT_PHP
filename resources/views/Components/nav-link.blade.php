@props(['active' => false])

<a class="{{ $active ? 'bg-red-700 text-white': 'text-red-100 hover:bg-red-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>
