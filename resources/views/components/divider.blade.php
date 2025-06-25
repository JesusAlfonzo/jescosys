@props(['currentPage'])

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">{{ $slot }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">
      {{ $currentPage }} {{-- Muestra la página actual --}}
    </li>
  </ol>
</nav>