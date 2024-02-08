@props([
    'title' => ''
])

<li>
    <h2 class="menu-title">{{ $title }}</h2>
    <ul>
      {{ $slot }}
    </ul>
</li>