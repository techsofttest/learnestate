{{-- resources/views/emails/auth/password-changed.blade.php --}}
{{--
    Variables:
    - $user      : User model (name, email)
    - $changedAt : Carbon instance or formatted datetime string
    - $ipAddress : IP address of the request (optional)
    - $resetUrl  : URL to reset password (if account compromised)
--}}

@extends('emails.layouts.base', ['subject' => 'Your Password Has Been Changed'])

@section('content')
@include('emails.components.greeting', [
    'icon'     => '✓',
    'title'    => 'Password Changed',
    'subtitle' => 'Security confirmation',
])

<p class="email-text">
    Hi {{ $user->name }}, your account password was successfully changed.
    If this was you, no further action is needed.
</p>

@include('emails.components.details-table', [
    'rows' => array_filter([
        ['label' => 'Account',    'value' => $user->email],
        ['label' => 'Changed at', 'value' => isset($changedAt)
            ? (is_string($changedAt) ? $changedAt : $changedAt->format('D, d M Y · H:i T'))
            : now()->format('D, d M Y · H:i T')],
        isset($ipAddress) ? ['label' => 'IP Address', 'value' => $ipAddress] : null,
    ])
])

@include('emails.components.info-box', [
    'type'    => 'warning',
    'title'   => 'Wasn\'t you?',
    'message' => 'If you did not make this change, your account may be compromised. Reset your password immediately using the link below.',
])

@include('emails.components.button', [
    'url'   => $resetUrl,
    'text'  => 'Secure My Account',
    'style' => 'secondary',
])

</div>

<div class="email-footer">
@include('emails.components.footer')
</div>
@endsection
