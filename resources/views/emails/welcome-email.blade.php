@component('mail::message')
#Welcome to snacGram

This is a community of fellow developers and love that you have joined us.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
