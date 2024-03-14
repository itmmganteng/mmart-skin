<div class="dropdown">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton_{{ $id }}" data-bs-toggle="dropdown" aria-expanded="false">
        Proses
    </button>
    <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton_{{ $id }}">
        @foreach ($actions as $action)
            @if (!empty($action['can']))
                @if(Laratrust::isAbleTo($action['can']))
                    <li>
                        @if (isset($action['onclick']))
                            <button type="button"
                                @if (isset($action['attr']) && count($action['attr']) > 0)
                                    @foreach ($action['attr'] as $key => $value)
                                        {{$key}}="{{$value}}"
                                    @endforeach
                                @endif
                                onclick="{{ $action['onclick'] }}" class="dropdown-item fw-semibold text-gray-600 {{ $action['class'] }}">
                                <i class="ki-duotone {{ $action['icon'] }} fs-7 me-1">
                                    @for ($i = 1; $i <= $action['iconPath']; $i++)
                                        <span class="path{{$i}}"></span>
                                    @endfor
                                </i>
                                {{ $action['label'] }}
                            </button>
                        @elseif (isset($action['url']))
                            <a href="{{ $action['url'] }}"
                                @if (isset($action['attr']) && count($action['attr']) > 0)
                                    @foreach ($action['attr'] as $key => $value)
                                        {{$key}}="{{$value}}"
                                    @endforeach
                                @endif
                                class="dropdown-item fw-semibold text-gray-600 {{ $action['class'] }}">
                                <i class="ki-duotone {{ $action['icon'] }} fs-7 me-1">
                                    @for ($i = 1; $i <= $action['iconPath']; $i++)
                                        <span class="path{{$i}}"></span>
                                    @endfor
                                </i>
                                {{ $action['label'] }}
                            </a>
                        @endif
                    </li>
                @endif
            @else
                <li>
                    @if (isset($action['onclick']))
                        <button type="button"
                            @if (isset($action['attr']) && count($action['attr']) > 0)
                                @foreach ($action['attr'] as $key => $value)
                                    {{$key}}="{{$value}}"
                                @endforeach
                            @endif
                            onclick="{{ $action['onclick'] }}" class="dropdown-item fw-semibold text-gray-600 {{ $action['class'] }}">
                            <i class="ki-duotone {{ $action['icon'] }} fs-7 me-1">
                                @for ($i = 1; $i <= $action['iconPath']; $i++)
                                    <span class="path{{$i}}"></span>
                                @endfor
                            </i>
                            {{ $action['label'] }}
                        </button>
                    @elseif (isset($action['url']))
                        <a href="{{ $action['url'] }}"
                            @if (isset($action['attr']) && count($action['attr']) > 0)
                                @foreach ($action['attr'] as $key => $value)
                                    {{$key}}="{{$value}}"
                                @endforeach
                            @endif
                            class="dropdown-item fw-semibold text-gray-600 {{ $action['class'] }}">
                            <i class="ki-duotone {{ $action['icon'] }} fs-7 me-1">
                                @for ($i = 1; $i <= $action['iconPath']; $i++)
                                    <span class="path{{$i}}"></span>
                                @endfor
                            </i>
                            {{ $action['label'] }}
                        </a>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
</div>
