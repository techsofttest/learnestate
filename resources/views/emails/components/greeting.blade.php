{{-- resources/views/emails/components/greeting.blade.php --}}
{{-- Usage: @include('emails.components.greeting', ['icon' => '✉', 'title' => 'Hello', 'subtitle' => 'A warm welcome']) --}}

<div class="email-body">
    @if(isset($icon))
    <div class="icon-block">
        <div class="icon-circle">{{ $icon }}</div>
    </div>
    @endif

    <h1 class="email-heading">{{ $title ?? 'Hello' }}</h1>

    @if(isset($subtitle))
    <p class="email-subheading">{{ $subtitle }}</p>
    @endif

    <hr class="divider">
