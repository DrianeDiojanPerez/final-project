@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="https://play-lh.googleusercontent.com/4tZ7jOspRBXG62q2gNkJeh5YB5vFZkYOSq138gc2iBT5KnMTU8knGjehwcpW_2RA4gI=s48-rw" class="logo">
@endif
</a>
</td>
</tr>
