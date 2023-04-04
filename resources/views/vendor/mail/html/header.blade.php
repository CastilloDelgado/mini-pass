@props(['url'])
<tr>
  <td class="header">
    <a href="{{ $url }}" style="display: inline-block;">
      @if (trim($slot) === 'Laravel')
      {{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
      <img src="https://minipass-assets.s3.amazonaws.com/logo-text.png" class="logo" alt="Minipass Logo">
      @else
      {{ $slot }}
      @endif
    </a>
  </td>
</tr>