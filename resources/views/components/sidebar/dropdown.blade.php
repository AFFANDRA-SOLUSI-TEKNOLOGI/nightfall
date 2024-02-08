@props([
    'title' => ''
])

<li>
    <details>
        <summary>
            @if ($icon ?? false)
                {{ $icon }}
            @endif
            {{ $title }}
        </summary>
        <ul>
          {{ $slot }}
        </ul>
    </details>
</li>