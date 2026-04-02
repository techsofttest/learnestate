{{-- resources/views/emails/components/button.blade.php --}}
{{-- Usage: @include('emails.components.button', ['url' => $url, 'text' => 'Click Me', 'style' => 'primary']) --}}

@php
    $style = $style ?? 'primary';
    $class = match($style) {
        'secondary' => 'btn-secondary',
        'gold'      => 'btn-gold',
        default     => 'btn-primary',
    };
@endphp

<div class="btn-wrapper">
    <!--[if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word"
        href="{{ $url }}" style="height:50px;v-text-anchor:middle;width:220px;" arcsize="1%" stroke="f" fillcolor="#1a1a1a">
        <w:anchorlock/>
        <center>
    <![endif]-->
    <a href="{{ $url }}" class="{{ $class }}" target="_blank">
        {{ $text ?? 'Continue' }}
    </a>
    <!--[if mso]>
        </center>
    </v:roundrect>
    <![endif]-->
</div>
