<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === '')
    سایت من
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
