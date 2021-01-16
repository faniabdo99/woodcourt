@component('mail::message')
# New Mail From Contact Us Page
{{$EmailData['message']}} <br>
<b>From:</b> {{$EmailData['name']}} <br>
<b>Email:</b> {{$EmailData['email']}}<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
