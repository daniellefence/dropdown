@php
    $dropdownId = 'popover-' . uniqid();
    $anchorName = '--anchor-' . uniqid();
@endphp

<x-df::button
    :variant="$variant ?? 'primary'"
    :size="$size ?? 'md'"
    class="m-1"
    popovertarget="{{ $dropdownId }}"
    style="anchor-name:{{ $anchorName }}"
>
    {{ $label ?? 'Toggle' }}
</x-df::button>

<ul class="dropdown menu w-52 rounded-box bg-base-100 shadow-sm"
    popover id="{{ $dropdownId }}" style="position-anchor:{{ $anchorName }}">
    @foreach ($items ?? [] as $item)
        <li>
            @if (isset($item['click']))
                <button type="button" {!! $item['click'] !!}>
                    {{ $item['label'] ?? 'Item' }}
                </button>
            @else
                <a href="{{ $item['href'] ?? '#' }}" @if(isset($item['target'])) target="{{ $item['target'] }}" @endif>
                    {{ $item['label'] ?? 'Item' }}
                </a>
            @endif
        </li>
    @endforeach
</ul>