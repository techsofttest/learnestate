{{-- resources/views/emails/auth/reset-password.blade.php --}}
{{--
    Variables:
    - $user      : User model (name, email)
    - $resetUrl  : Password reset URL (signed)
    - $expiresIn : e.g. "60 minutes"
--}}

@extends('emails.layouts.base', ['subject' => 'Reset Your Password'])

@section('content')
@include('emails.components.greeting', [
    'icon'     => '⟳',
    'title'    => 'Reset Your Password',
    'subtitle' => 'Password recovery request',
])

<p class="email-text">
    Hi {{ $user->name }}, we received a request to reset the password for your account
    associated with <strong>{{ $user->email }}</strong>.
</p>

<p class="email-text">
    Click the button below to choose a new password. This link is single-use and will expire shortly.
</p>

@include('emails.components.button', [
    'url'   => $resetUrl,
    'text'  => 'Reset My Password',
    'style' => 'primary',
])

@include('emails.components.info-box', [
    'type'    => 'warning',
    'title'   => 'Security notice',
    'message' => 'This link expires in ' . ($expiresIn ?? '60 minutes') . '. If you did not request a password reset, please secure your account immediately.',
])

<hr class="divider">

<p class="email-text-small">
    If the button doesn't work, copy and paste this link into your browser:
</p>
<div class="link-fallback">
    <a href="{{ $resetUrl }}">{{ $resetUrl }}</a>
</div>

<p class="email-text-small">
    If you didn't request this, you can safely ignore this email. Your password will remain unchanged.
</p>

</div>

<div class="email-footer">
@include('emails.components.footer')
</div>
@endsection
