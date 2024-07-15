@component('mail::message')
# Membership Approved

Dear {{ $member->full_name }},

Congratulations! Your membership has been approved. You can now log in using the following credentials:

**Email:** {{ $member->email }}  
**Password:** {{ $member->password }}

@component('mail::button', ['url' => route('login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
