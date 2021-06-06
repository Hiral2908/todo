@component('mail::message')
# Introduction




@component('mail::button', ['url' => ''])
Button Text
@endcomponent
Hi, {{$first_name}}
    {{$last_name}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
