{{-- resources/views/emails/auth/welcome.blade.php --}}
{{--
    Variables:
    - $user        : User model (name, email)
    - $loginUrl    : URL to login page
    - $settingsUrl : URL to account settings (optional)
--}}

@extends('emails.layouts.base', ['subject' => 'Welcome to ' . config('app.name')])

@section('content')
@include('emails.components.greeting', [
    'icon'     => '✦',
    'title'    => 'Welcome, ' . $user->name,
    'subtitle' => 'Your account is ready',
])

<p class="email-text">
    We're glad you're here. Your account has been created and is ready to use.
    Everything is set up — just sign in to get started.
</p>

@include('emails.components.info-box', [
    'title'   => 'Your account details',
    'message' => $user->email,
])

@include('emails.components.button', [
    'url'  => $loginUrl,
    'text' => 'Sign In to Your Account',
])

<hr class="divider">

<p class="email-text-small">
    If you didn't create this account, please ignore this email or
    <a href="{{ config('app.url') }}/contact" style="color: #C8A96E;">contact support</a>
    and we'll investigate immediately.
</p>

</div>{{-- close email-body --}}

<div class="email-footer">
@include('emails.components.footer')
</div>
@endsection
