@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Bebang')
<img src="{{ URL::asset('uploads/bebang-new-logo.png') }}" class="logo" alt="Bebang Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
