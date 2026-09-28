@php
$box_color_style = [
    'info' => 'bg-sky-200 border-blue-600',
    'success' => 'bg-green-200 border-green-700',
    'warning' => 'bg-yellow-200 border-orange-700',
    'error' => 'bg-red-200 border-red-700'
][$type] ?? '';

$icon_path = [
    'info' => asset('icons/bx--info-circle.svg'),
    'success' => asset('icons/bx--check-circle.svg'),
    'warning' => asset('icons/bx--error.svg'),
    'error' => asset('icons/bx--error-alt.svg')
][$type] ?? asset('icons/bx--info-circle.svg');


@endphp

<div class="flex items-center gap-3 rounded-lg p-4 border-2 {{ $box_color_style }}">
    <img class="size-5 fill-amber-50" src="{{ $icon_path }}">
    <p class="text-black">
        {{ $message }}
    </p>
</div>