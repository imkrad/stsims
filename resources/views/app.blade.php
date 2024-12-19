<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>STSIMS</title>
        <meta name="description" content="STSIMS - DOST IX">
        <meta name="keywords" content="DOST, STSIMS, SCHOLARSHIP, SEI">
        <meta name="author" content="KR4D">
        <meta property="og:title" content="STSIMS - Science & Technology Scholarship Information Management System">
        <meta property="og:description" content="Scholarship Management System">
        <meta property="og:image" content="URL to the template's logo or featured image">
        <meta property="og:url" content="URL to the template's webpage">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
        @vite(['resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>