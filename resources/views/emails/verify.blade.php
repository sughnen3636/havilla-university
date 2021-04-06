@component('mail::message')
<h2>Havilla University Admissions - Email Verification</h2>

Dear {{ $name }},<br>
Please click on the Verify Email button below to verify your email address and complete your initial admission application process. 

@component('mail::button', ['url' => $url ])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
