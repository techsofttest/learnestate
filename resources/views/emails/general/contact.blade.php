{{-- resources/views/emails/general/notification.blade.php --}}
{{--
    A flexible catch-all template for transactional emails.
    Variables:
    - $user       : User model (name) — optional
    - $subject    : Email subject
    - $icon       : Emoji icon (optional)
    - $title      : Main heading
    - $subtitle   : Subtitle (optional)
    - $body       : Main body text (plain text, supports basic HTML)
    - $ctaUrl     : Call-to-action URL (optional)
    - $ctaText    : CTA button label (optional)
    - $ctaStyle   : 'primary' | 'secondary' | 'gold' (optional)
    - $infoBoxes  : Array of ['type' => 'info|warning', 'title' => '...', 'message' => '...'] (optional)
    - $details    : Array of ['label' => '...', 'value' => '...'] for details table (optional)
--}}

@extends('emails.layouts.base', ['subject' => $subject ?? 'A message from ' . config('app.name')])

@section('content')
@include('emails.components.greeting', [
    'icon'     => $icon ?? null,
    'title'    => $title ?? 'Hello' . (isset($user) ? ', ' . $user->name : ''),
    'subtitle' => $subtitle ?? null,
])

@if(isset($body))
<p class="email-text">{!! $body !!}</p>
@endif

@if(isset($details))
@include('emails.components.details-table', ['rows' => $details])
@endif

@if(isset($infoBoxes))
    @foreach($infoBoxes as $box)
    @include('emails.components.info-box', [
        'type'    => $box['type'] ?? 'info',
        'title'   => $box['title'] ?? null,
        'message' => $box['message'],
    ])
    @endforeach
@endif

@if(isset($ctaUrl))
@include('emails.components.button', [
    'url'   => $ctaUrl,
    'text'  => $ctaText ?? 'Learn More',
    'style' => $ctaStyle ?? 'primary',
])
@endif

</div>

<div class="email-footer">
@include('emails.components.footer')
</div>
@endsection
