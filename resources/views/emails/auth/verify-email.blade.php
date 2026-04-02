{{-- resources/views/emails/auth/verify-email.blade.php --}}
{{--
    Variables:
    - $user            : User model (name, email)
    - $verificationUrl : Signed verification URL
    - $expiresIn       : Human-readable expiry e.g. "24 hours"
--}}

@extends('emails.layouts.base', ['subject' => 'Verify Your Email Address'])

@section('content')
@include('emails.components.greeting', [
    'icon'     => '◈',
    'title'    => 'Verify Your Email',
    'subtitle' => 'One quick step',
])

<p class="email-text">
    Hi {{ $user->name }}, thanks for signing up. To complete your registration
    and activate your account, please verify your email address by clicking the button below.
</p>

@include('emails.components.button', [
    'url'  => $verificationUrl,
    'text' => 'Verify Email Address',
])

@include('emails.components.info-box', [
    'title'   => 'Link expires in',
    'message' => $expiresIn ?? '24 hours',
])

<hr class="divider">

<p class="email-text-small">
    If the button doesn't work, copy and paste this link into your browser:
</p>
<div class="link-fallback">
    <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
</div>

<p class="email-text-small">
    If you didn't create an account with us, no action is required and you can safely ignore this email.
</p>

</div>

<div class="email-footer">
@include('emails.components.footer')
</div>
@endsection
