{{-- resources/views/emails/components/footer.blade.php --}}
<div class="email-footer">
    <div class="footer-links">
        <a href="{{ config('app.url') }}/privacy">Privacy</a>
        <a href="{{ config('app.url') }}/terms">Terms</a>
        <a href="{{ config('app.url') }}/help">Help</a>
        <a href="{{ $unsubscribeUrl ?? '#' }}">Unsubscribe</a>
    </div>

    <p class="footer-text">
        You're receiving this email because you have an account with
        <strong style="color: #8A7F78;">{{ config('app.name') }}</strong>.
    </p>
    <p class="footer-address">
        {{ config('mail.from.address') }} &nbsp;&middot;&nbsp;
        {{ config('app.address', '123 Main Street, City, Country') }}
    </p>

    <div style="margin-top: 20px;">
        <span style="font-family: 'Georgia', serif; font-size: 11px; color: #D4CEC8; letter-spacing: 0.15em;">
            &mdash; &nbsp; {{ config('app.name') }} &nbsp; &mdash;
        </span>
    </div>
</div>
