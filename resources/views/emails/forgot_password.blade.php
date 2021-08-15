@component('mail::message')
Hi, {{$user->name}}. Forgot Your Password?

<p>It happens.</p>

{{-- @component('mail::button', ['url' => url('reset/'.$user->remember_token)])
    Reset Your Password
@endcomponent --}}
 Your new login password :- <b> {{ $user->password_rendome }} </b>

! in case you have any issue recovering your password, please contact us using the form from contact us page
<br />
Thanks,<br>
KADAKARAN TEAM
@endcomponent