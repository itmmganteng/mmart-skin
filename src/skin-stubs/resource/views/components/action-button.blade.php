@php
    $icons = cache()->remember('duotone-icons', 3600, function () {
        return json_decode(file_get_contents(public_path('icons.json')), true);
    });

    $actions = collect($actions)->map(function($action){
        $action['show'] = $action['show'] ?? true;
        return $action;
    });

    $activeButtons = $actions->where('show', true);

    // Check if there are multiple actions (dropdown or single button)
    $isDropdown = $activeButtons->count() > 1;
@endphp

@if($isDropdown)
    <div class="dropdown">
        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton_{{ $id }}" data-bs-toggle="dropdown" aria-expanded="false">
            Action
        </button>
        <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="dropdownMenuButton_{{ $id }}">
            @foreach ($actions as $action)
                @if (isset($action['show']) && !$action['show']) @continue @endif

                @php
                    $hasPermission = empty($action['can']) || Laratrust::isAbleTo($action['can']);
                    $attributes = $action['attr'] ?? [];
                    $iconHtml = renderIcon($action['icon'], $icons);
                    $attributesString = collect($attributes)->map(fn($v, $k) => "{$k}=\"{$v}\"")->implode(' ');
                @endphp

                @if ($hasPermission)
                    <li>
                        @if (isset($action['onclick']))
                            <button type="button" class="dropdown-item fw-semibold text-gray-600 rounded my-1 bg-hover-light-{{ $action['color'] }} text-hover-{{ $action['color'] }}" onclick="{{ $action['onclick'] }}" {!! $attributesString !!}>
                                {!! $iconHtml !!} {{ $action['label'] }}
                            </button>
                        @elseif (isset($action['url']))
                            <a href="{{ $action['url'] }}" class="dropdown-item fw-semibold text-gray-600 rounded my-1 bg-hover-light-{{ $action['color'] }} text-hover-{{ $action['color'] }}" {!! $attributesString !!}>
                                {!! $iconHtml !!} {{ $action['label'] }}
                            </a>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@elseif ($activeButtons->count() == 1)
    @php
        $action = $activeButtons->first();
        $hasPermission = empty($action['can']) || Laratrust::isAbleTo($action['can']);
        $attributes = $action['attr'] ?? [];
        $iconHtml = renderIcon($action['icon'], $icons, 5);
        $attributesString = collect($attributes)->map(fn($v, $k) => "{$k}=\"{$v}\"")->implode(' ');
    @endphp

    @if ($hasPermission && (!isset($action['show']) || $action['show']))
        @if (isset($action['onclick']))
            <button class="btn btn-sm btn-{{ $action['color'] }}" onclick="{{ $action['onclick'] }}" {!! $attributesString !!}>
                {!! $iconHtml !!} {{ $action['label'] }}
            </button>
        @elseif (isset($action['url']))
            <a href="{{ $action['url'] }}" class="btn btn-sm btn-{{ $action['color'] }}" {!! $attributesString !!}>
                {!! $iconHtml !!} {{ $action['label'] }}
            </a>
        @endif
    @endif
@else
    <button class="btn btn-light btn-sm" disabled>No Action</button>
@endif
