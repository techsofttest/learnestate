{{-- resources/views/emails/components/otp.blade.php --}}
{{-- Usage: @include('emails.components.otp', ['code' => $otp, 'expiry' => '10 minutes']) --}}

<div class="otp-block">
    <div class="otp-code">{{ $code }}</div>
    @if(isset($expiry))
    <p class="otp-expiry">Expires in {{ $expiry }}</p>
    @endif
</div>
