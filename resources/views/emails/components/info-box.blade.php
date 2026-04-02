{{-- resources/views/emails/components/info-box.blade.php --}}
{{-- Usage: @include('emails.components.info-box', ['title' => 'Note', 'message' => 'Your message here', 'type' => 'info']) --}}

@php $type = $type ?? 'info'; @endphp

<div class="{{ $type === 'warning' ? 'warning-box' : 'info-box' }}">
    @if(isset($title))
    <p class="{{ $type === 'warning' ? 'warning-box-title' : 'info-box-title' }}">{{ $title }}</p>
    @endif
    <p class="info-box-text" style="margin: 0;">{{ $message ?? $slot ?? '' }}</p>
</div>
