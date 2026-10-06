<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">

```
<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<!-- Title -->
<title>{{ $title ?? 'EnzoCode.id — Creative Digital Agency' }}</title>

<!-- Favicon -->
<link
    rel="icon"
    type="image/png"
    href="/images/enzocode-logo.png?v=4"
>

<!-- SEO -->
<meta
    name="description"
    content="EnzoCode.id membantu bisnis, UMKM, sekolah, dan organisasi membangun website serta aplikasi berbasis web dengan desain modern dan responsif."
>

<meta
    name="robots"
    content="index, follow"
>

<!-- Theme Color -->
<meta
    name="theme-color"
    content="#050816"
>

<!-- Open Graph -->
<meta
    property="og:title"
    content="EnzoCode.id — Creative Digital Agency"
>

<meta
    property="og:description"
    content="Website dan aplikasi berbasis web dengan desain modern untuk bisnis dan organisasi."
>

<meta
    property="og:type"
    content="website"
>

<meta
    property="og:url"
    content="{{ url('/') }}"
>

<meta
    property="og:image"
    content="{{ asset('images/enzocode-logo.png') }}"
>

<!-- Vite -->
@vite('resources/js/app.js')

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet"
>

<!-- Alpine.js -->
<script
    defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
></script>
```

</head>

<body class="bg-[#050816] text-white overflow-x-hidden">

```
{{-- Background Glow --}}
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">

    <div
        class="absolute top-[-120px] left-[-120px]
               w-[500px] h-[500px]
               bg-cyan-500/20
               blur-3xl
               rounded-full"
    ></div>

    <div
        class="absolute bottom-[-120px] right-[-120px]
               w-[500px] h-[500px]
               bg-blue-600/20
               blur-3xl
               rounded-full"
    ></div>

</div>

{{-- Navbar --}}
@include('components.navbar')

{{-- Content --}}
<main>
    @yield('content')
</main>
    <!-- Floating WhatsApp -->
    <a
        href="https://wa.me/6282286241853"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat dengan EnzoCode melalui WhatsApp"
        class="group fixed bottom-6 right-6 z-50
               flex h-14 w-14 items-center justify-center
               rounded-full
               bg-green-500
               text-white
               shadow-2xl
               shadow-green-500/20
               transition-all duration-300
               hover:scale-110
               hover:bg-green-400
               sm:bottom-7 sm:right-7"
    >

        <!-- Ping -->
        <span
            class="absolute inset-0 rounded-full
                   bg-green-400
                   opacity-20
                   animate-ping"
        ></span>

        <!-- Icon -->
        <svg
            class="relative h-6 w-6"
            viewBox="0 0 24 24"
            fill="currentColor"
            aria-hidden="true"
        >
            <path
                d="M17.5 14.2c-.3-.1-1.8-.9-2.1-1-.3-.1-.5-.1-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.7-1.4-1.6-1.5-1.9-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.2-.5.1-.2 0-.4 0-.5 0-.1-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1 2.9 1.1 3.1c.1.2 2 3 4.8 4.2.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.2-.6-.3z"
            />

            <path
                d="M12.1 2.5A9.4 9.4 0 0 0 3.9 16l-1.4 5.2 5.3-1.4a9.5 9.5 0 1 0 4.3-17.3zm0 17.1c-1.5 0-2.9-.4-4.1-1.1l-.3-.2-3.1.8.8-3-.2-.3a7.6 7.6 0 1 1 6.9 3.8z"
            />
        </svg>

    </a>

</body>
</html>
