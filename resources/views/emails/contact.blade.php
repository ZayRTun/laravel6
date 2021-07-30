@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'localhost:8000/'])
Visit my Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
