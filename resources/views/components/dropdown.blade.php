{{-- DanielleFence Dropdown Component (DaisyUI version) --}}
<div class="dropdown">
    {{-- Toggle button --}}
    <x-df::button
        :variant="$variant ?? 'primary'"
        :size="$size ?? 'md'"
        tabindex="0"
        role="button"
        class="m-1"
    >
        {{ $label ?? 'Toggle' }}
    </x-df::button>

    {{-- Dropdown menu --}}
    <ul
        tabindex="0"
        class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm"
    >
        @foreach ($items ?? [] as $item)
            <li class="my-1">
                @php
                    $variant = $item['variant'] ?? 'neutral';
                    $btnSize = $item['size'] ?? ($size ?? 'md');
                @endphp

                {{-- Click‑action item --}}
                @if(isset($item['click']))
                    <x-df::button
                        :variant="$variant"
                        :size="$btnSize"
                        type="button"
                        wire:click="{{ $item['click'] }}"
                    >
                        @isset($item['icon'])
                            <x-slot name="icon">
                                <x-df::icon :name="$item['icon']" class="w-4 h-4" />
                            </x-slot>
                        @endisset
                        {{ $item['label'] ?? 'Item' }}
                    </x-df::button>
                @else
                    {{-- Anchor link item --}}
                    <x-df::button
                        :variant="$variant"
                        :size="$btnSize"
                        as="a"
                        href="{{ $item['href'] ?? '#' }}"
                        :target="$item['target'] ?? null"
                    >
                        @isset($item['icon'])
                            <x-slot name="icon">
                                <x-df::icon :name="$item['icon']" class="w-4 h-4" />
                            </x-slot>
                        @endisset
                        {{ $item['label'] ?? 'Item' }}
                    </x-df::button>
                @endif
            </li>
        @endforeach
    </ul>
</div>