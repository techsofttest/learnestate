<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>{{ $subject ?? config('app.name') }}</title>

    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->

    <style>
        /* === RESET === */
        * { box-sizing: border-box; }
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

        /* === BASE === */
        body {
            background-color: #F0EDE8;
            font-family: 'Georgia', 'Times New Roman', serif;
        }

        /* === WRAPPER === */
        .email-wrapper {
            background-color: #F0EDE8;
            padding: 40px 20px;
        }

        /* === CONTAINER === */
        .email-container {
            max-width: 580px;
            margin: 0 auto;
        }

        /* === HEADER === */
        .email-header {
            text-align: center;
            padding: 0 0 32px 0;
        }
        .email-header .brand-name {
            font-family: 'Georgia', serif;
            font-size: 13px;
            font-weight: normal;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #1a1a1a;
            text-decoration: none;
        }
        .email-header .brand-dot {
            display: inline-block;
            width: 5px;
            height: 5px;
            background: #C8A96E;
            border-radius: 50%;
            margin: 0 10px;
            vertical-align: middle;
            position: relative;
            top: -1px;
        }

        /* === CARD === */
        .email-card {
            background: #FFFFFF;
            border-radius: 2px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 8px 40px rgba(0,0,0,0.05);
        }

        /* === ACCENT BAR === */
        .accent-bar {
            height: 3px;
            background: linear-gradient(90deg, #1a1a1a 0%, #C8A96E 50%, #1a1a1a 100%);
        }

        /* === BODY === */
        .email-body {
            padding: 48px 52px;
        }

        /* === ICON BLOCK === */
        .icon-block {
            text-align: center;
            margin-bottom: 36px;
        }
        .icon-circle {
            display: inline-block;
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #F7F4F0;
            border: 1px solid #E8E2D9;
            line-height: 72px;
            text-align: center;
            font-size: 30px;
        }

        /* === HEADING === */
        .email-heading {
            font-family: 'Georgia', serif;
            font-size: 26px;
            font-weight: normal;
            color: #1a1a1a;
            margin: 0 0 12px 0;
            line-height: 1.3;
            text-align: center;
            letter-spacing: -0.01em;
        }
        .email-subheading {
            font-family: 'Georgia', serif;
            font-size: 13px;
            font-weight: normal;
            color: #9B8EA0;
            margin: 0 0 32px 0;
            text-align: center;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        /* === DIVIDER === */
        .divider {
            border: none;
            border-top: 1px solid #EDE8E1;
            margin: 32px 0;
        }
        .divider-ornament {
            text-align: center;
            margin: 28px 0;
        }
        .divider-ornament span {
            font-size: 11px;
            color: #C8A96E;
            letter-spacing: 0.3em;
        }

        /* === TEXT === */
        .email-text {
            font-family: 'Georgia', serif;
            font-size: 16px;
            line-height: 1.75;
            color: #3D3530;
            margin: 0 0 20px 0;
        }
        .email-text-small {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 13px;
            line-height: 1.6;
            color: #8A7F78;
            margin: 0 0 12px 0;
        }
        .email-text-mono {
            font-family: 'Courier New', Courier, monospace;
            font-size: 15px;
            color: #1a1a1a;
        }

        /* === BUTTON === */
        .btn-wrapper {
            text-align: center;
            margin: 36px 0;
        }
        .btn-primary {
            display: inline-block;
            background-color: #1a1a1a;
            color: #FFFFFF !important;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 1px;
            mso-padding-alt: 0;
        }
        .btn-secondary {
            display: inline-block;
            background-color: transparent;
            color: #1a1a1a !important;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 14px 38px;
            border-radius: 1px;
            border: 1.5px solid #1a1a1a;
        }
        .btn-gold {
            display: inline-block;
            background-color: #C8A96E;
            color: #FFFFFF !important;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 1px;
        }

        /* === INFO BOX === */
        .info-box {
            background: #F7F4F0;
            border-left: 3px solid #C8A96E;
            padding: 20px 24px;
            margin: 24px 0;
            border-radius: 0 2px 2px 0;
        }
        .info-box-title {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #C8A96E;
            margin: 0 0 8px 0;
        }
        .info-box-text {
            font-family: 'Georgia', serif;
            font-size: 15px;
            color: #3D3530;
            margin: 0;
            line-height: 1.6;
        }

        /* === WARNING BOX === */
        .warning-box {
            background: #FDF8F0;
            border-left: 3px solid #E8A844;
            padding: 20px 24px;
            margin: 24px 0;
            border-radius: 0 2px 2px 0;
        }
        .warning-box-title {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #C8780A;
            margin: 0 0 8px 0;
        }

        /* === OTP CODE === */
        .otp-block {
            text-align: center;
            margin: 32px 0;
        }
        .otp-code {
            display: inline-block;
            font-family: 'Courier New', Courier, monospace;
            font-size: 38px;
            font-weight: 700;
            color: #1a1a1a;
            letter-spacing: 0.25em;
            padding: 20px 36px;
            background: #F7F4F0;
            border: 1px solid #E8E2D9;
            border-radius: 2px;
        }
        .otp-expiry {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            color: #9B8EA0;
            margin-top: 12px;
            letter-spacing: 0.05em;
        }

        /* === LINK FALLBACK === */
        .link-fallback {
            background: #F7F4F0;
            border: 1px solid #E8E2D9;
            border-radius: 2px;
            padding: 16px 20px;
            margin: 20px 0;
            word-break: break-all;
        }
        .link-fallback a {
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            color: #4A7FA5 !important;
            text-decoration: underline;
        }

        /* === DETAILS TABLE === */
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .details-table td {
            padding: 10px 0;
            border-bottom: 1px solid #EDE8E1;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
        }
        .details-table td:first-child {
            color: #9B8EA0;
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            width: 40%;
            vertical-align: top;
            padding-top: 12px;
        }
        .details-table td:last-child {
            color: #1a1a1a;
            font-weight: 500;
            text-align: right;
        }

        /* === FOOTER === */
        .email-footer {
            padding: 36px 52px 48px;
            background: #FAFAF8;
            border-top: 1px solid #EDE8E1;
            text-align: center;
        }
        .footer-links {
            margin-bottom: 16px;
        }
        .footer-links a {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 11px;
            color: #9B8EA0 !important;
            text-decoration: none;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin: 0 12px;
        }
        .footer-text {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            color: #B5ADA7;
            line-height: 1.6;
            margin: 0 0 8px 0;
        }
        .footer-address {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 11px;
            color: #C5BDB8;
            line-height: 1.5;
        }

        /* === SOCIAL ICONS === */
        .social-links {
            margin: 20px 0;
        }
        .social-links a {
            display: inline-block;
            width: 32px;
            height: 32px;
            border: 1px solid #DDD8D2;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-size: 13px;
            color: #9B8EA0 !important;
            text-decoration: none;
            margin: 0 4px;
        }

        /* === RESPONSIVE === */
        @media screen and (max-width: 600px) {
            .email-body { padding: 32px 28px !important; }
            .email-footer { padding: 28px 28px 36px !important; }
            .email-heading { font-size: 22px !important; }
            .otp-code { font-size: 30px !important; letter-spacing: 0.2em !important; }
        }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-container">

        {{-- HEADER --}}
        <div class="email-header">
            <a href="{{ config('app.url') }}" class="brand-name">
                {{ config('app.name') }}
            </a>
        </div>

        {{-- MAIN CARD --}}
        <div class="email-card">
            <div class="accent-bar"></div>
            {{ $slot }}
        </div>

        {{-- FOOTER --}}
        <div style="height:1px; background: linear-gradient(90deg, transparent, #C8A96E, transparent); margin: 0;"></div>
        @include('emails.components.footer')

    </div>
</div>
</body>
</html>
