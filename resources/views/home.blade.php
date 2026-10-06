@extends('layouts.app')

@section('content')

<section
    id="home"
    class="relative min-h-screen overflow-hidden px-6 pt-32
           lg:px-8 scroll-mt-24"
>
    <!-- Decorative Grid -->
    <div
        class="pointer-events-none absolute inset-0 opacity-[0.035]"
        style="
            background-image:
                linear-gradient(rgba(255,255,255,.7) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.7) 1px, transparent 1px);
            background-size: 50px 50px;
        "
    ></div>

    <!-- Glow -->
    <div
        class="pointer-events-none absolute left-[-180px] top-[120px]
               h-[400px] w-[400px] rounded-full
               bg-cyan-400/10 blur-[120px]"
    ></div>

    <div
        class="pointer-events-none absolute right-[-120px] top-[180px]
               h-[450px] w-[450px] rounded-full
               bg-blue-500/10 blur-[130px]"
    ></div>

    <div class="relative mx-auto flex min-h-[calc(100vh-8rem)] w-full max-w-7xl items-center">

        <div class="grid w-full min-w-0 items-center gap-12 lg:grid-cols-2 lg:gap-16">

            <!-- LEFT CONTENT -->
            <div class="max-w-3xl">

                <div
                    class="inline-flex items-center gap-2 rounded-full
                           border border-cyan-400/20
                           bg-cyan-400/10
                           px-4 py-2
                           text-sm text-cyan-300"
                >
                    <span class="h-2 w-2 rounded-full bg-cyan-400 animate-pulse"></span>

                    Creative Digital Agency
                </div>

                <h1
                    class="mt-7 text-[2.25rem] font-black leading-[1.08]
                        tracking-tight
                        sm:text-5xl
                        md:text-6xl
                        lg:text-7xl"
                >
                    Kami Membangun

                    <span
                        class="block bg-gradient-to-r
                               from-cyan-400 to-blue-500
                               bg-clip-text text-transparent"
                    >
                        Website Modern
                    </span>

                    Untuk Bisnis Anda
                </h1>

                <p
                    class="mt-7 max-w-2xl text-base leading-8
                           text-gray-400 sm:text-lg"
                >
                    Enzocode.id membantu UMKM, sekolah, cafe,
                    dan bisnis lainnya memiliki website profesional
                    dengan desain modern, responsif, dan berorientasi
                    pada pengalaman pengguna.
                </p>

                <!-- BUTTON -->
                <div class="mt-9 flex flex-wrap gap-4">

                    <a
                        href="https://wa.me/6282286241853"
                        target="_blank"
                        class="inline-flex items-center gap-2
                               rounded-2xl bg-cyan-400
                               px-7 py-4
                               font-bold text-black
                               transition duration-300
                               hover:bg-cyan-300
                               hover:shadow-xl
                               hover:shadow-cyan-400/20"
                    >
                        Mulai Project

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 12h14m-6-6 6 6-6 6"
                            />
                        </svg>
                    </a>

                    <a
                        href="#portfolio"
                        class="inline-flex items-center gap-2
                               rounded-2xl border border-white/10
                               bg-white/5
                               px-7 py-4
                               font-semibold text-white
                               transition duration-300
                               hover:bg-white/10"
                    >
                        Lihat Portfolio
                    </a>

                </div>

                <!-- MINI TRUST -->
                <div class="mt-10 flex flex-wrap gap-x-8 gap-y-3 text-sm text-gray-500">

                    <span class="flex items-center gap-2">
                        <span class="text-cyan-400">✓</span>
                        Responsive Design
                    </span>

                    <span class="flex items-center gap-2">
                        <span class="text-cyan-400">✓</span>
                        Custom Development
                    </span>

                    <span class="flex items-center gap-2">
                        <span class="text-cyan-400">✓</span>
                        Modern UI/UX
                    </span>

                </div>

            </div>


<!-- RIGHT VISUAL -->
<div class="relative mx-auto mt-12 w-full min-w-0 max-w-xl lg:mt-0">

    <!-- Outer Glow -->
    <div
        class="absolute inset-10 rounded-full
               bg-cyan-400/10 blur-[100px]"
    ></div>

    <!-- Main Dashboard -->
    <div
        class="relative overflow-hidden rounded-[28px]
               border border-white/10
               bg-[#0a1022]/95
               p-3
               shadow-2xl
               shadow-cyan-500/10
               backdrop-blur-xl
               transition duration-500
               hover:-translate-y-2
               hover:border-cyan-400/20"
    >

        <!-- Browser Header -->
        <div
            class="flex items-center justify-between
                   rounded-2xl
                   border border-white/5
                   bg-white/[0.03]
                   px-4 py-3"
        >

            <div class="flex items-center gap-2">
                <span class="h-3 w-3 rounded-full bg-red-400/70"></span>
                <span class="h-3 w-3 rounded-full bg-yellow-400/70"></span>
                <span class="h-3 w-3 rounded-full bg-green-400/70"></span>
            </div>

            <div
                class="hidden h-7 w-56 items-center justify-center
                       rounded-lg border border-white/5
                       bg-white/[0.03]
                       sm:flex"
            >
                <span class="text-[10px] text-gray-600">
                    dashboard.enzocode.id
                </span>
            </div>

            <div
                class="flex h-7 w-7 items-center justify-center
                       rounded-lg bg-cyan-400/10"
            >
                <div class="h-2.5 w-2.5 rounded-full bg-cyan-400"></div>
            </div>

        </div>


        <!-- Dashboard -->
        <div class="p-5 sm:p-7">

            <!-- Header Dashboard -->
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-xs text-gray-500">
                        Overview
                    </p>

                    <h3 class="mt-1 text-xl font-bold">
                        EnzoCode Dashboard
                    </h3>
                </div>

                <div
                    class="rounded-xl border border-cyan-400/10
                           bg-cyan-400/10 px-3 py-2"
                >
                    <span class="text-xs font-medium text-cyan-400">
                        Live
                    </span>
                </div>

            </div>


            <!-- Stats -->
            <div class="mt-6 grid grid-cols-3 gap-2 sm:gap-3">

                <!-- Projects -->
                <div
                    class="rounded-2xl border border-white/5
                           bg-white/[0.03] p-4"
                >
                    <p class="text-[10px] uppercase tracking-wider text-gray-600">
                        Projects
                    </p>

                    <div class="mt-2 text-lg font-black sm:text-xl">
                        50<span class="text-cyan-400">+</span>
                    </div>

                    <p class="mt-1 text-[10px] text-gray-600">
                        Completed
                    </p>
                </div>


                <!-- Responsive -->
                <div
                    class="rounded-2xl border border-white/5
                           bg-white/[0.03] p-4"
                >
                    <p class="text-[10px] uppercase tracking-wider text-gray-600">
                        Responsive
                    </p>

                    <div class="mt-2 text-xl font-black">
                        100<span class="text-cyan-400">%</span>
                    </div>

                    <p class="mt-1 text-[10px] text-gray-600">
                        All Devices
                    </p>
                </div>


                <!-- Support -->
                <div
                    class="rounded-2xl border border-white/5
                           bg-white/[0.03] p-4"
                >
                    <p class="text-[10px] uppercase tracking-wider text-gray-600">
                        Support
                    </p>

                    <div class="mt-2 text-xl font-black">
                        24<span class="text-cyan-400">/7</span>
                    </div>

                    <p class="mt-1 text-[10px] text-gray-600">
                        Assistance
                    </p>
                </div>

            </div>


            <!-- Project Activity -->
            <div
                class="mt-4 rounded-2xl
                       border border-white/5
                       bg-white/[0.03]
                       p-5"
            >

                <div class="flex items-start justify-between">

                    <div>
                        <p class="text-xs text-gray-500">
                            Project Activity
                        </p>

                        <p class="mt-1 text-lg font-bold">
                            Growth Overview
                        </p>
                    </div>

                    <div class="text-right">
                        <p class="text-xs text-gray-600">
                            Demo data
                        </p>

                        <p class="mt-1 text-xs font-medium text-cyan-400">
                            2026
                        </p>
                    </div>

                </div>


                <!-- Chart -->
                <div class="relative mt-6 h-32 sm:h-40">

                    <!-- Horizontal Lines -->
                    <div class="absolute inset-0 flex flex-col justify-between">

                        <div class="border-t border-white/5"></div>
                        <div class="border-t border-white/5"></div>
                        <div class="border-t border-white/5"></div>
                        <div class="border-t border-white/5"></div>
                        <div class="border-t border-white/5"></div>

                    </div>


                    <!-- SVG Line -->
                    <svg
                        class="absolute inset-0 h-full w-full overflow-visible"
                        viewBox="0 0 600 180"
                        preserveAspectRatio="none"
                    >

                        <!-- Area -->
                        <path
                            d="M0,150
                               C45,145 55,135 90,138
                               C125,141 130,112 170,118
                               C205,124 225,95 260,102
                               C300,110 315,78 350,86
                               C390,95 395,55 435,64
                               C470,72 495,42 530,50
                               C555,56 575,25 600,30
                               L600,180
                               L0,180 Z"
                            fill="currentColor"
                            class="text-cyan-400/5"
                        />

                        <!-- Line -->
                        <path
                            d="M0,150
                               C45,145 55,135 90,138
                               C125,141 130,112 170,118
                               C205,124 225,95 260,102
                               C300,110 315,78 350,86
                               C390,95 395,55 435,64
                               C470,72 495,42 530,50
                               C555,56 575,25 600,30"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="4"
                            stroke-linecap="round"
                            class="text-cyan-400"
                        />

                        <!-- End Point -->
                        <circle
                            cx="600"
                            cy="30"
                            r="7"
                            fill="currentColor"
                            class="text-cyan-400"
                        />

                        <circle
                            cx="600"
                            cy="30"
                            r="13"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            opacity="0.2"
                            class="text-cyan-400"
                        />

                    </svg>

                </div>


                <!-- Months -->
                <div
                    class="mt-3 grid grid-cols-7
                           text-center text-[10px] text-gray-600"
                >
                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                    <span>Jun</span>
                    <span>Jul</span>
                </div>

            </div>


            <!-- Latest Project -->
            <div
                class="mt-4 rounded-2xl
                       border border-cyan-400/10
                       bg-cyan-400/[0.04]
                       p-5"
            >

                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-4">

                        <div
                            class="flex h-11 w-11 items-center justify-center
                                   rounded-xl bg-cyan-400/10"
                        >
                            <svg
                                class="h-5 w-5 text-cyan-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M3 7h18M5 7v12h14V7M8 4h8l2 3H6l2-3Z"
                                />
                            </svg>
                        </div>

                        <div>
                            <p class="text-[10px] uppercase tracking-wider text-gray-600">
                                Latest Project
                            </p>

                            <p class="mt-1 text-sm font-semibold">
                                Sistem Presensi
                            </p>

                            <p class="mt-1 text-xs text-gray-500">
                                Universitas Bung Hatta
                            </p>
                        </div>

                    </div>


                    <div class="hidden text-right sm:block">
                        <div
                            class="inline-flex items-center gap-2 rounded-full
                                   border border-green-400/10
                                   bg-green-400/5
                                   px-3 py-1.5"
                        >
                            <span class="h-1.5 w-1.5 rounded-full bg-green-400"></span>

                            <span class="text-[10px] text-green-400">
                                Completed
                            </span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Floating Card -->
    <div
        class="absolute -left-5 bottom-8 hidden
               rounded-2xl border border-white/10
               bg-[#0a1022]/95
               px-5 py-4
               shadow-xl
               backdrop-blur-xl
               sm:block"
    >

        <div class="flex items-center gap-3">

            <div
                class="flex h-10 w-10 items-center justify-center
                       rounded-xl bg-cyan-400/10"
            >
                <svg
                    class="h-5 w-5 text-cyan-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 13l4 4L19 7"
                    />
                </svg>
            </div>

            <div>
                <p class="text-[10px] text-gray-500">
                    Project Status
                </p>

                <p class="mt-1 text-sm font-semibold">
                    Development
                </p>
            </div>

        </div>

    </div>


    <!-- Floating Technology -->
    <div
        class="absolute -right-5 top-10 hidden
               rounded-2xl border border-white/10
               bg-[#0a1022]/95
               px-5 py-4
               shadow-xl
               backdrop-blur-xl
               sm:block"
    >

        <p class="text-[10px] text-gray-500">
            Powered By
        </p>

        <div class="mt-2 flex items-center gap-2">

            <span
                class="rounded-lg bg-cyan-400/10
                       px-2.5 py-1
                       text-[10px]
                       font-semibold
                       text-cyan-400"
            >
                Laravel
            </span>

            <span
                class="rounded-lg bg-blue-400/10
                       px-2.5 py-1
                       text-[10px]
                       font-semibold
                       text-blue-400"
            >
                Tailwind
            </span>

        </div>

    </div>

</div>
    </div>
</section>


<!-- FOOTER -->
<footer class="border-t border-white/5 py-10">
    <div class="mx-auto flex max-w-7xl flex-col gap-5 px-6
                sm:flex-row sm:items-center sm:justify-between lg:px-8">

        <div>
            <div class="text-lg font-bold">
                Enzo<span class="text-cyan-400">Code</span><span class="text-gray-500">.id</span>
            </div>

            <p class="mt-1 text-sm text-gray-500">
                Creative Digital Agency.
            </p>
        </div>

        <p class="text-sm text-gray-500">
            © {{ date('Y') }} EnzoCode.id. All rights reserved.
        </p>

    </div>
</footer>
<!-- STATS -->
<section class="relative border-y border-white/5 bg-white/[0.02]">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 divide-y divide-white/5 sm:grid-cols-3 sm:divide-x sm:divide-y-0">

            <!-- Stat 1 -->
            <div class="px-6 py-8 text-center sm:py-10">
                <div class="text-3xl font-black sm:text-4xl">
                        Custom
                    </div>

                    <p class="mt-2 text-sm text-gray-500">
                        Development
                    </p>
            </div>

            <!-- Stat 2 -->
            <div class="px-6 py-8 text-center sm:py-10">
                <div class="text-3xl font-black sm:text-4xl">
                    Modern
                </div>

                <p class="mt-2 text-sm text-gray-500">
                    UI/UX
                </p>
            </div>

            <!-- Stat 3 -->
            <div class="px-6 py-8 text-center sm:py-10">
                <div class="text-3xl font-black sm:text-4xl">
                    100<span class="text-cyan-400">%</span>
                </div>

                <p class="mt-2 text-sm text-gray-500">
                    Responsive
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SERVICES -->
<section
    id="services"
    class="reveal relative border-t border-white/5 py-24 sm:py-32 scroll-mt-24"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- Section Header -->
        <div class="max-w-2xl">

            <div
                class="inline-flex items-center gap-2 rounded-full
                       border border-cyan-400/20
                       bg-cyan-400/10
                       px-4 py-2
                       text-xs font-medium
                       text-cyan-300"
            >
                <span class="h-1.5 w-1.5 rounded-full bg-cyan-400"></span>
                What We Do
            </div>

            <h2
                class="mt-5 text-3xl font-black tracking-tight
                       sm:text-4xl md:text-5xl"
            >
                Solusi Digital untuk
                <span
                    class="bg-gradient-to-r from-cyan-400 to-blue-500
                           bg-clip-text text-transparent"
                >
                    Bisnis Anda
                </span>
            </h2>

            <p class="mt-5 max-w-xl text-base leading-8 text-gray-400 sm:text-lg">
                Dari website sederhana hingga sistem informasi custom,
                kami membantu mengubah kebutuhan bisnis menjadi solusi
                digital yang modern dan mudah digunakan.
            </p>

        </div>


        <!-- Services Grid -->
        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


            <!-- Service 1 -->
            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/10
                       bg-white/[0.03]
                       p-7
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-cyan-400/30
                       hover:bg-white/[0.05]"
            >

                <!-- Glow -->
                <div
                    class="absolute -right-16 -top-16
                           h-32 w-32 rounded-full
                           bg-cyan-400/10 blur-3xl
                           transition duration-500
                           group-hover:bg-cyan-400/20"
                ></div>

                <div
                    class="relative flex h-14 w-14 items-center justify-center
                           rounded-2xl border border-cyan-400/10
                           bg-cyan-400/10 text-cyan-400
                           transition duration-500
                           group-hover:scale-110"
                >
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M4 5h16v14H4zM8 9h8M8 13h5"
                        />
                    </svg>
                </div>

                <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-cyan-400">
                    Website
                </p>

                <h3 class="mt-2 text-xl font-bold">
                    Landing Page
                </h3>

                <p class="mt-3 text-sm leading-7 text-gray-400">
                    Landing page modern untuk memperkenalkan bisnis,
                    produk, layanan, atau campaign secara profesional.
                </p>

                <div class="mt-6 flex items-center gap-2 text-xs text-gray-500">
                    <span>Modern UI</span>
                    <span>•</span>
                    <span>Responsive</span>
                </div>

            </div>


            <!-- Service 2 -->
            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/10
                       bg-white/[0.03]
                       p-7
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-blue-400/30
                       hover:bg-white/[0.05]"
            >

                <div
                    class="absolute -right-16 -top-16
                           h-32 w-32 rounded-full
                           bg-blue-400/10 blur-3xl
                           transition duration-500
                           group-hover:bg-blue-400/20"
                ></div>

                <div
                    class="relative flex h-14 w-14 items-center justify-center
                           rounded-2xl border border-blue-400/10
                           bg-blue-400/10 text-blue-400
                           transition duration-500
                           group-hover:scale-110"
                >
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 5h18v14H3zM7 9h10M7 13h6"
                        />
                    </svg>
                </div>

                <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-blue-400">
                    Business
                </p>

                <h3 class="mt-2 text-xl font-bold">
                    Company Profile
                </h3>

                <p class="mt-3 text-sm leading-7 text-gray-400">
                    Website profesional untuk membangun kredibilitas,
                    memperkenalkan perusahaan, serta menampilkan layanan
                    dan informasi bisnis.
                </p>

                <div class="mt-6 flex items-center gap-2 text-xs text-gray-500">
                    <span>Professional</span>
                    <span>•</span>
                    <span>SEO Ready</span>
                </div>

            </div>


            <!-- Service 3 -->
            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/10
                       bg-white/[0.03]
                       p-7
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-purple-400/30
                       hover:bg-white/[0.05]"
            >

                <div
                    class="absolute -right-16 -top-16
                           h-32 w-32 rounded-full
                           bg-purple-400/10 blur-3xl
                           transition duration-500
                           group-hover:bg-purple-400/20"
                ></div>

                <div
                    class="relative flex h-14 w-14 items-center justify-center
                           rounded-2xl border border-purple-400/10
                           bg-purple-400/10 text-purple-400
                           transition duration-500
                           group-hover:scale-110"
                >
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M4 6h16v12H4zM8 10h8M8 14h5"
                        />
                    </svg>
                </div>

                <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-purple-400">
                    System
                </p>

                <h3 class="mt-2 text-xl font-bold">
                    Sistem Informasi
                </h3>

                <p class="mt-3 text-sm leading-7 text-gray-400">
                    Sistem berbasis web untuk membantu pengelolaan data,
                    presensi, akademik, administrasi, dan kebutuhan
                    operasional lainnya.
                </p>

                <div class="mt-6 flex items-center gap-2 text-xs text-gray-500">
                    <span>Custom System</span>
                    <span>•</span>
                    <span>Database</span>
                </div>

            </div>


            <!-- Service 4 -->
            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/10
                       bg-white/[0.03]
                       p-7
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-pink-400/30
                       hover:bg-white/[0.05]"
            >

                <div
                    class="absolute -right-16 -top-16
                           h-32 w-32 rounded-full
                           bg-pink-400/10 blur-3xl
                           transition duration-500
                           group-hover:bg-pink-400/20"
                ></div>

                <div
                    class="relative flex h-14 w-14 items-center justify-center
                           rounded-2xl border border-pink-400/10
                           bg-pink-400/10 text-pink-400
                           transition duration-500
                           group-hover:scale-110"
                >
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 3l2.8 5.7L21 9.6l-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"
                        />
                    </svg>
                </div>

                <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-pink-400">
                    Design
                </p>

                <h3 class="mt-2 text-xl font-bold">
                    UI/UX Design
                </h3>

                <p class="mt-3 text-sm leading-7 text-gray-400">
                    Perancangan antarmuka yang modern dan intuitif agar
                    website maupun aplikasi nyaman digunakan oleh pengguna.
                </p>

                <div class="mt-6 flex items-center gap-2 text-xs text-gray-500">
                    <span>User Focused</span>
                    <span>•</span>
                    <span>Modern</span>
                </div>

            </div>


            <!-- Service 5 -->
            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/10
                       bg-white/[0.03]
                       p-7
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-emerald-400/30
                       hover:bg-white/[0.05]"
            >

                <div
                    class="absolute -right-16 -top-16
                           h-32 w-32 rounded-full
                           bg-emerald-400/10 blur-3xl
                           transition duration-500
                           group-hover:bg-emerald-400/20"
                ></div>

                <div
                    class="relative flex h-14 w-14 items-center justify-center
                           rounded-2xl border border-emerald-400/10
                           bg-emerald-400/10 text-emerald-400
                           transition duration-500
                           group-hover:scale-110"
                >
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M4 5h16v14H4zM8 8h8M8 12h4M8 16h6"
                        />
                    </svg>
                </div>

                <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-emerald-400">
                    Commerce
                </p>

                <h3 class="mt-2 text-xl font-bold">
                    E-Commerce
                </h3>

                <p class="mt-3 text-sm leading-7 text-gray-400">
                    Website toko online untuk menampilkan produk,
                    mengelola katalog, menerima pesanan, dan membantu
                    bisnis menjangkau pelanggan secara digital.
                </p>

                <div class="mt-6 flex items-center gap-2 text-xs text-gray-500">
                    <span>Product Catalog</span>
                    <span>•</span>
                    <span>Order System</span>
                </div>

            </div>


            <!-- Service 6 -->
<div
    class="group relative overflow-hidden rounded-3xl
           border border-white/10
           bg-white/[0.03]
           p-7
           transition duration-500
           hover:-translate-y-2
           hover:border-orange-400/30
           hover:bg-white/[0.05]"
>

    <div
        class="absolute -right-16 -top-16
               h-32 w-32 rounded-full
               bg-orange-400/10 blur-3xl
               transition duration-500
               group-hover:bg-orange-400/20"
    ></div>

    <div
        class="relative flex h-14 w-14 items-center justify-center
               rounded-2xl border border-orange-400/10
               bg-orange-400/10 text-orange-400
               transition duration-500
               group-hover:scale-110"
    >
        <svg
            class="h-6 w-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.8"
                d="M6 4h12v16H6zM9 8h6M9 12h6M9 16h3"
            />
        </svg>
    </div>

    <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-orange-400">
        Application
    </p>

    <h3 class="mt-2 text-xl font-bold">
        Web Application
    </h3>

    <p class="mt-3 text-sm leading-7 text-gray-400">
        Pengembangan aplikasi berbasis web untuk kebutuhan bisnis,
        administrasi, pengelolaan data, hingga proses kerja yang lebih
        terstruktur dan efisien.
    </p>

    <div class="mt-6 flex items-center gap-2 text-xs text-gray-500">
        <span>Laravel</span>
        <span>•</span>
        <span>Custom Feature</span>
    </div>

</div>

        </div>


        <!-- Bottom CTA -->
        <div
            class="mt-10 flex flex-col gap-5 rounded-3xl
                   border border-white/10
                   bg-white/[0.02]
                   p-6 sm:flex-row sm:items-center
                   sm:justify-between sm:p-8"
        >

            <div>
                <p class="text-lg font-bold">
                    Punya kebutuhan yang lebih spesifik?
                </p>

                <p class="mt-1 text-sm text-gray-500">
                    Kami bisa membuat solusi custom sesuai kebutuhan bisnis Anda.
                </p>
            </div>

            <a
                href="https://wa.me/6282286241853"
                target="_blank"
                class="inline-flex shrink-0 items-center justify-center
                       rounded-xl bg-white/5
                       px-5 py-3
                       text-sm font-semibold
                       text-white
                       transition duration-300
                       hover:bg-cyan-400
                       hover:text-black"
            >
                Konsultasikan Project
            </a>

        </div>

    </div>
</section>
<!-- WHY ENZOCODE -->
<section class="relative border-t border-white/5 py-24 sm:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- Header -->
        <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">

            <div>

                <div
                    class="inline-flex items-center gap-2 rounded-full
                           border border-cyan-400/20
                           bg-cyan-400/10
                           px-4 py-2
                           text-xs font-medium
                           text-cyan-300"
                >
                    <span class="h-1.5 w-1.5 rounded-full bg-cyan-400"></span>
                    Why EnzoCode?
                </div>

                <h2
                    class="mt-5 text-3xl font-black tracking-tight
                           sm:text-4xl md:text-5xl"
                >
                    Bukan Sekadar
                    <span
                        class="bg-gradient-to-r from-cyan-400 to-blue-500
                               bg-clip-text text-transparent"
                    >
                        Website
                    </span>
                </h2>

            </div>

            <p class="max-w-2xl text-base leading-8 text-gray-400 sm:text-lg lg:ml-auto">
                Kami fokus membangun website dan aplikasi yang memiliki
                tampilan modern, struktur yang jelas, dan disesuaikan
                dengan kebutuhan setiap project.
            </p>

        </div>


        <!-- Main Content -->
        <div class="mt-14 grid gap-6 lg:grid-cols-2">


            <!-- Featured Card -->
            <div
                class="relative overflow-hidden rounded-[28px]
                       border border-cyan-400/20
                       bg-gradient-to-br
                       from-cyan-400/[0.08]
                       via-white/[0.03]
                       to-blue-500/[0.05]
                       p-8 sm:p-10"
            >

                <!-- Decorative Glow -->
                <div
                    class="absolute -right-24 -top-24
                           h-56 w-56 rounded-full
                           bg-cyan-400/10 blur-3xl"
                ></div>

                <div class="relative">

                    <div
                        class="flex h-14 w-14 items-center justify-center
                               rounded-2xl
                               border border-cyan-400/10
                               bg-cyan-400/10
                               text-cyan-400"
                    >
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 3l2.6 5.4L20 9.2l-4 3.9.9 5.5L12 16l-4.9 2.6.9-5.5-4-3.9 5.4-.8L12 3z"
                            />
                        </svg>
                    </div>

                    <p class="mt-8 text-xs font-medium uppercase tracking-[0.2em] text-cyan-400">
                        Our Approach
                    </p>

                    <h3 class="mt-3 text-2xl font-black sm:text-3xl">
                        Dibangun Sesuai Kebutuhan,
                        Bukan Template Semata
                    </h3>

                    <p class="mt-5 max-w-xl leading-8 text-gray-400">
                        Setiap project memiliki kebutuhan yang berbeda.
                        Karena itu, struktur halaman, fitur, dan tampilan
                        dapat disesuaikan dengan tujuan project yang dikerjakan.
                    </p>

                    <!-- Small Tags -->
                    <div class="mt-8 flex flex-wrap gap-2">

                        <span
                            class="rounded-lg border border-white/5
                                   bg-white/[0.03]
                                   px-3 py-2
                                   text-xs text-gray-300"
                        >
                            Custom Development
                        </span>

                        <span
                            class="rounded-lg border border-white/5
                                   bg-white/[0.03]
                                   px-3 py-2
                                   text-xs text-gray-300"
                        >
                            Modern UI
                        </span>

                        <span
                            class="rounded-lg border border-white/5
                                   bg-white/[0.03]
                                   px-3 py-2
                                   text-xs text-gray-300"
                        >
                            Responsive
                        </span>

                    </div>

                </div>

            </div>


            <!-- Features -->
            <div class="grid gap-6 sm:grid-cols-2">

                <!-- Feature 1 -->
                <div
                    class="group rounded-[24px]
                           border border-white/10
                           bg-white/[0.03]
                           p-7
                           transition duration-500
                           hover:-translate-y-1
                           hover:border-cyan-400/20
                           hover:bg-white/[0.05]"
                >

                    <div
                        class="flex h-12 w-12 items-center justify-center
                               rounded-xl bg-cyan-400/10
                               text-cyan-400"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M4 5h16v14H4zM8 9h8M8 13h5"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Modern UI
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Tampilan dirancang modern, rapi, dan fokus pada
                        pengalaman pengguna.
                    </p>

                </div>


                <!-- Feature 2 -->
                <div
                    class="group rounded-[24px]
                           border border-white/10
                           bg-white/[0.03]
                           p-7
                           transition duration-500
                           hover:-translate-y-1
                           hover:border-blue-400/20
                           hover:bg-white/[0.05]"
                >

                    <div
                        class="flex h-12 w-12 items-center justify-center
                               rounded-xl bg-blue-400/10
                               text-blue-400"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M4 7h16M7 4v16M17 4v16"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Responsive
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Website dibuat agar tetap nyaman digunakan
                        melalui desktop, tablet, maupun smartphone.
                    </p>

                </div>


                <!-- Feature 3 -->
                <div
                    class="group rounded-[24px]
                           border border-white/10
                           bg-white/[0.03]
                           p-7
                           transition duration-500
                           hover:-translate-y-1
                           hover:border-purple-400/20
                           hover:bg-white/[0.05]"
                >

                    <div
                        class="flex h-12 w-12 items-center justify-center
                               rounded-xl bg-purple-400/10
                               text-purple-400"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 15v2m-4 3h8M8 5a4 4 0 118 0c0 1.5-.7 2.4-1.7 3.3-.9.8-1.3 1.4-1.3 2.7h-2c0-1.3-.4-1.9-1.3-2.7C8.7 7.4 8 6.5 8 5z"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        User Focused
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Struktur halaman dibuat agar informasi penting
                        lebih mudah ditemukan oleh pengguna.
                    </p>

                </div>


                <!-- Feature 4 -->
                <div
                    class="group rounded-[24px]
                           border border-white/10
                           bg-white/[0.03]
                           p-7
                           transition duration-500
                           hover:-translate-y-1
                           hover:border-emerald-400/20
                           hover:bg-white/[0.05]"
                >

                    <div
                        class="flex h-12 w-12 items-center justify-center
                               rounded-xl bg-emerald-400/10
                               text-emerald-400"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M5 12l4 4L19 6"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Clean Structure
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Struktur website dibuat lebih terorganisir
                        sehingga lebih mudah dikembangkan sesuai kebutuhan.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- PORTFOLIO -->
<section
    id="portfolio"
    class="reveal relative border-t border-white/5 py-24 sm:py-32 scroll-mt-24"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- HEADER -->
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

            <div class="max-w-2xl">

                <div
                    class="inline-flex items-center gap-2 rounded-full
                           border border-cyan-400/20
                           bg-cyan-400/10
                           px-4 py-2
                           text-xs font-medium
                           text-cyan-300"
                >
                    <span class="h-1.5 w-1.5 rounded-full bg-cyan-400"></span>
                    Selected Works
                </div>

                <h2
                    class="mt-5 text-3xl font-black tracking-tight
                           sm:text-4xl md:text-5xl"
                >
                    Project yang
                    <span
                        class="bg-gradient-to-r from-cyan-400 to-blue-500
                               bg-clip-text text-transparent"
                    >
                        Kami Bangun
                    </span>
                </h2>

                <p class="mt-5 max-w-xl text-base leading-8 text-gray-400 sm:text-lg">
                    Beberapa project yang menjadi bagian dari perjalanan
                    EnzoCode dalam membangun solusi digital untuk berbagai kebutuhan.
                </p>

            </div>

            <p class="text-sm text-gray-600">
                Portfolio / 01
            </p>

        </div>


        <!-- FEATURED PROJECT -->
        <div
            class="group mt-14 overflow-hidden rounded-[28px]
                   border border-white/10
                   bg-white/[0.03]
                   transition duration-500
                   hover:border-cyan-400/20"
        >

            <div class="grid lg:grid-cols-[1.15fr_0.85fr]">

                <!-- PROJECT IMAGE -->
                <div class="relative min-h-[320px] overflow-hidden bg-slate-950 sm:min-h-[420px]">

                    <img
                        src="/images/presensi-bung-hatta.png"
                        alt="Sistem Presensi Universitas Bung Hatta"
                        class="absolute inset-0 h-full w-full object-cover
                               transition duration-700
                               group-hover:scale-105"
                    >

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0
                               bg-gradient-to-t from-[#050816]
                               via-transparent to-transparent"
                    ></div>

                    <!-- Top Badge -->
                    <div class="absolute left-6 top-6">

                        <span
                            class="inline-flex items-center gap-2 rounded-full
                                   border border-white/10
                                   bg-[#050816]/70
                                   px-4 py-2
                                   text-xs font-medium
                                   text-gray-200
                                   backdrop-blur-xl"
                        >
                            <span class="h-1.5 w-1.5 rounded-full bg-green-400"></span>
                            Completed Project
                        </span>

                    </div>

                    <!-- Bottom Image Label -->
                    <div class="absolute bottom-6 left-6 right-6">

                        <p class="text-xs font-medium uppercase tracking-[0.2em] text-cyan-400">
                            Featured Project
                        </p>

                        <h3 class="mt-2 text-2xl font-bold sm:text-3xl">
                            Sistem Presensi
                        </h3>

                    </div>

                    <!-- Hover Icon -->
                    <div
                        class="absolute right-6 top-6 flex h-11 w-11 items-center
                               justify-center rounded-full
                               border border-white/10
                               bg-[#050816]/70
                               text-white
                               opacity-0
                               backdrop-blur-xl
                               transition duration-500
                               group-hover:opacity-100"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M5 12h14m-6-6 6 6-6 6"
                            />
                        </svg>
                    </div>

                </div>


                <!-- PROJECT INFO -->
                <div class="flex flex-col justify-between p-7 sm:p-10">

                    <div>

                        <p class="text-sm font-medium text-cyan-400">
                            Universitas Bung Hatta
                        </p>

                        <h3 class="mt-3 text-2xl font-black sm:text-3xl">
                            Sistem Presensi Akademik
                        </h3>

                        <p class="mt-5 leading-8 text-gray-400">
                            Website sistem presensi modern yang dirancang untuk
                            mendukung proses absensi dosen dan tendik akademik
                            secara lebih terstruktur dan efisien.
                        </p>


                        <!-- Project Details -->
                        <div class="mt-8 grid grid-cols-2 gap-4">

                            <div
                                class="rounded-2xl border border-white/5
                                       bg-white/[0.02] p-4"
                            >
                                <p class="text-xs text-gray-600">
                                    Category
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    Sistem Informasi
                                </p>
                            </div>

                            <div
                                class="rounded-2xl border border-white/5
                                       bg-white/[0.02] p-4"
                            >
                                <p class="text-xs text-gray-600">
                                    Platform
                                </p>

                                <p class="mt-2 text-sm font-semibold">
                                    Web Application
                                </p>
                            </div>

                        </div>


                        <!-- Technologies -->
                        <div class="mt-8">

                            <p class="text-xs font-medium uppercase tracking-[0.18em] text-gray-600">
                                Built With
                            </p>

                            <div class="mt-4 flex flex-wrap gap-2">

                                <span
                                    class="rounded-lg border border-white/5
                                           bg-white/[0.03]
                                           px-3 py-2
                                           text-xs text-gray-300"
                                >
                                    Laravel
                                </span>

                                <span
                                    class="rounded-lg border border-white/5
                                           bg-white/[0.03]
                                           px-3 py-2
                                           text-xs text-gray-300"
                                >
                                    MySQL
                                </span>

                                <span
                                    class="rounded-lg border border-white/5
                                           bg-white/[0.03]
                                           px-3 py-2
                                           text-xs text-gray-300"
                                >
                                    Tailwind CSS
                                </span>

                                <span
                                    class="rounded-lg border border-white/5
                                           bg-white/[0.03]
                                           px-3 py-2
                                           text-xs text-gray-300"
                                >
                                    JavaScript
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Bottom CTA -->
                    <div class="mt-10 flex items-center justify-between border-t border-white/5 pt-6">

                        <div>
                            <p class="text-xs text-gray-600">
                                Project
                            </p>

                            <p class="mt-1 text-sm font-semibold">
                                University System
                            </p>
                        </div>

                        <a
                            href="https://wa.me/6282286241853"
                            target="_blank"
                            class="inline-flex items-center gap-2 rounded-xl
                                   bg-cyan-400
                                   px-5 py-3
                                   text-sm font-bold text-slate-950
                                   transition duration-300
                                   hover:bg-cyan-300
                                   hover:shadow-lg
                                   hover:shadow-cyan-400/20"
                        >
                            Discuss Project

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 12h14m-6-6 6 6-6 6"
                                />
                            </svg>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- SECONDARY PROJECTS -->
        <div class="mt-6 grid gap-6 md:grid-cols-2">

            <!-- Project Coming Soon -->
            <div
                class="group rounded-[28px]
                       border border-dashed border-white/10
                       bg-white/[0.02]
                       p-7 sm:p-8
                       transition duration-500
                       hover:border-cyan-400/20
                       hover:bg-white/[0.03]"
            >

                <div class="flex items-start justify-between">

                    <div
                        class="flex h-12 w-12 items-center justify-center
                               rounded-2xl bg-cyan-400/10 text-cyan-400"
                    >
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 6v12M6 12h12"
                            />
                        </svg>
                    </div>

                    <span class="text-xs text-gray-600">
                        02
                    </span>

                </div>

                <p class="mt-8 text-xs font-medium uppercase tracking-[0.18em] text-gray-600">
                    Coming Soon
                </p>

                <h3 class="mt-2 text-xl font-bold">
                    Project Berikutnya
                </h3>

                <p class="mt-3 max-w-md text-sm leading-7 text-gray-500">
                    Project baru EnzoCode akan ditambahkan di bagian ini
                    seiring bertambahnya portfolio.
                </p>

            </div>


            <!-- Custom Project CTA -->
            <div
                class="group rounded-[28px]
                       border border-cyan-400/10
                       bg-gradient-to-br
                       from-cyan-400/[0.06]
                       to-blue-500/[0.03]
                       p-7 sm:p-8"
            >

                <div class="flex items-start justify-between">

                    <div
                        class="flex h-12 w-12 items-center justify-center
                               rounded-2xl bg-blue-400/10 text-blue-400"
                    >
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 3v18M3 12h18"
                            />
                        </svg>
                    </div>

                    <span class="text-xs text-cyan-400">
                        Custom
                    </span>

                </div>

                <h3 class="mt-8 text-xl font-bold">
                    Punya Project Sendiri?
                </h3>

                <p class="mt-3 max-w-md text-sm leading-7 text-gray-400">
                    Ceritakan ide website atau sistem yang ingin kamu bangun.
                    Kami siap membantu mengembangkan konsepnya.
                </p>

                <a
                    href="https://wa.me/6282286241853"
                    target="_blank"
                    class="mt-6 inline-flex items-center gap-2
                           text-sm font-semibold text-cyan-400
                           transition hover:text-cyan-300"
                >
                    Mulai Konsultasi

                    <svg
                        class="h-4 w-4 transition duration-300
                               group-hover:translate-x-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h14m-6-6 6 6-6 6"
                        />
                    </svg>
                </a>

            </div>

        </div>

    </div>
</section>

<!-- HOW WE WORK -->
<section class="reveal relative border-t border-white/5 py-24 sm:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- Header -->
        <div class="max-w-2xl">

            <div
                class="inline-flex items-center gap-2 rounded-full
                       border border-cyan-400/20
                       bg-cyan-400/10
                       px-4 py-2
                       text-xs font-medium
                       text-cyan-300"
            >
                <span class="h-1.5 w-1.5 rounded-full bg-cyan-400"></span>
                Our Process
            </div>

            <h2 class="mt-5 text-3xl font-black tracking-tight sm:text-4xl md:text-5xl">
                Dari Ide Menjadi
                <span
                    class="bg-gradient-to-r from-cyan-400 to-blue-500
                           bg-clip-text text-transparent"
                >
                    Website
                </span>
            </h2>

            <p class="mt-5 max-w-xl text-base leading-8 text-gray-400 sm:text-lg">
                Kami membuat proses pengembangan sesederhana mungkin,
                mulai dari memahami kebutuhan hingga website siap digunakan.
            </p>

        </div>


        <!-- Process -->
        <div class="relative mt-16">

            <!-- Connecting Line -->
            <div
                class="absolute left-[28px] top-8 hidden h-px
                       w-[calc(100%-56px)]
                       bg-gradient-to-r
                       from-cyan-400/30
                       via-blue-400/20
                       to-transparent
                       lg:block"
            ></div>


            <div class="grid gap-10 lg:grid-cols-4">

                <!-- Step 1 -->
                <div class="relative">

                    <div
                        class="flex h-14 w-14 items-center justify-center
                               rounded-2xl border border-cyan-400/20
                               bg-cyan-400/10
                               text-lg font-black text-cyan-400"
                    >
                        01
                    </div>

                    <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-cyan-400">
                        Discovery
                    </p>

                    <h3 class="mt-2 text-xl font-bold">
                        Kenali Kebutuhan
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Kami memahami kebutuhan, tujuan, target pengguna,
                        dan fitur yang dibutuhkan sebelum project dimulai.
                    </p>

                </div>


                <!-- Step 2 -->
                <div class="relative">

                    <div
                        class="flex h-14 w-14 items-center justify-center
                               rounded-2xl border border-blue-400/20
                               bg-blue-400/10
                               text-lg font-black text-blue-400"
                    >
                        02
                    </div>

                    <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-blue-400">
                        Design
                    </p>

                    <h3 class="mt-2 text-xl font-bold">
                        Rancang Tampilan
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Struktur halaman dan tampilan antarmuka dirancang
                        agar modern, jelas, dan nyaman digunakan.
                    </p>

                </div>


                <!-- Step 3 -->
                <div class="relative">

                    <div
                        class="flex h-14 w-14 items-center justify-center
                               rounded-2xl border border-purple-400/20
                               bg-purple-400/10
                               text-lg font-black text-purple-400"
                    >
                        03
                    </div>

                    <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-purple-400">
                        Development
                    </p>

                    <h3 class="mt-2 text-xl font-bold">
                        Bangun Sistem
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Desain kemudian dikembangkan menjadi website atau
                        aplikasi yang sesuai dengan kebutuhan project.
                    </p>

                </div>


                <!-- Step 4 -->
                <div class="relative">

                    <div
                        class="flex h-14 w-14 items-center justify-center
                               rounded-2xl border border-green-400/20
                               bg-green-400/10
                               text-lg font-black text-green-400"
                    >
                        04
                    </div>

                    <p class="mt-7 text-xs font-medium uppercase tracking-[0.18em] text-green-400">
                        Launch
                    </p>

                    <h3 class="mt-2 text-xl font-bold">
                        Siap Digunakan
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-500">
                        Setelah proses pengembangan selesai, project
                        dipersiapkan agar siap digunakan sesuai kebutuhan.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- PRICING -->
<section
    id="pricing"
    class="reveal relative border-t border-white/5 py-24 sm:py-32 scroll-mt-24"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- Header -->
        <div class="mx-auto max-w-2xl text-center">

            <div
                class="mx-auto inline-flex items-center gap-2 rounded-full
                       border border-cyan-400/20
                       bg-cyan-400/10
                       px-4 py-2
                       text-xs font-medium
                       text-cyan-300"
            >
                <span class="h-1.5 w-1.5 rounded-full bg-cyan-400"></span>
                Simple Pricing
            </div>

            <h2 class="mt-5 text-3xl font-black tracking-tight sm:text-4xl md:text-5xl">
                Paket yang Sesuai
                <span
                    class="bg-gradient-to-r from-cyan-400 to-blue-500
                           bg-clip-text text-transparent"
                >
                    Kebutuhan
                </span>
            </h2>

            <p class="mt-5 leading-8 text-gray-400">
                Pilih paket yang sesuai dengan kebutuhan project.
                Untuk kebutuhan khusus, kami dapat menyesuaikan fitur
                berdasarkan scope project.
            </p>

        </div>


        <!-- Pricing Cards -->
        <div class="mx-auto mt-16 grid max-w-6xl gap-6 lg:grid-cols-3">


            <!-- BASIC -->
            <div
                class="group flex flex-col rounded-[28px]
                       border border-white/10
                       bg-white/[0.03]
                       p-7 sm:p-8
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-white/20"
            >

                <div class="flex items-center justify-between">

                    <span class="text-sm font-semibold text-gray-400">
                        Basic
                    </span>

                    <span class="text-xs text-gray-600">
                        01
                    </span>

                </div>


                <h3 class="mt-5 text-2xl font-black">
                    Website Starter
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Cocok untuk bisnis kecil yang membutuhkan
                    kehadiran online secara profesional.
                </p>


                <div class="mt-7">

                    <span class="text-sm text-gray-500">
                        Mulai dari
                    </span>

                    <div class="mt-1 text-3xl font-black">
                        Rp5jt
                    </div>

                </div>


                <div class="my-8 h-px bg-white/5"></div>


                <ul class="space-y-4 text-sm text-gray-400">

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Landing page
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Responsive design
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Modern UI
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Contact section
                    </li>

                </ul>


                <a
                    href="https://wa.me/6282286241853"
                    target="_blank"
                    class="mt-auto pt-8 shadow-cyan-400/10"
                    
                >
                    <span
                        class="flex items-center justify-center rounded-xl
                               border border-white/10
                               bg-white/[0.03]
                               px-5 py-3
                               text-sm font-semibold
                               transition
                               group-hover:border-cyan-400/20
                               group-hover:bg-cyan-400/10"
                    >
                        Pilih Paket
                    </span>
                </a>

            </div>


            <!-- PROFESSIONAL -->
            <div
                class="group relative flex flex-col overflow-hidden
                       rounded-[28px]
                       border border-cyan-400/30
                       bg-gradient-to-b
                       from-cyan-400/[0.09]
                       to-white/[0.02]
                       p-7
                       shadow-2xl
                       shadow-cyan-500/10
                       sm:p-8
                       transition duration-500
                       hover:-translate-y-2"
            >

                <!-- Popular -->
                <div
                    class="absolute right-6 top-6
                           rounded-full
                           bg-cyan-400
                           px-3 py-1.5
                           text-[10px]
                           font-black
                           uppercase
                           tracking-wider
                           text-slate-950"
                >
                    Most Popular
                </div>


                <div class="flex items-center justify-between">

                    <span class="text-sm font-semibold text-cyan-400">
                        Professional
                    </span>

                    <span class="text-xs text-cyan-400/40">
                        02
                    </span>

                </div>


                <h3 class="mt-5 text-2xl font-black">
                    Website Business
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-400">
                    Untuk bisnis yang membutuhkan website lebih lengkap
                    dengan tampilan custom dan fitur tambahan.
                </p>


                <div class="mt-7">

                    <span class="text-sm text-gray-500">
                        Mulai dari
                    </span>

                    <div class="mt-1 text-3xl font-black">
                        Rp10jt
                    </div>

                </div>


                <div class="my-8 h-px bg-white/10"></div>


                <ul class="space-y-4 text-sm text-gray-300">

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Custom UI/UX
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Responsive design
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Database
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Admin dashboard
                    </li>

                    <li class="flex gap-3">
                        <span class="text-cyan-400">✓</span>
                        Custom features
                    </li>

                </ul>


                <a
                    href="https://wa.me/6282286241853"
                    target="_blank"
                    class="mt-auto pt-8"
                >
                    <span
                        class="flex items-center justify-center gap-2
                               rounded-xl
                               bg-cyan-400
                               px-5 py-3.5
                               text-sm font-black
                               text-slate-950
                               transition duration-300
                               hover:bg-cyan-300
                               hover:shadow-lg
                               hover:shadow-cyan-400/20"
                    >
                        Konsultasi Sekarang

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 12h14m-6-6 6 6-6 6"
                            />
                        </svg>
                    </span>
                </a>

            </div>


            <!-- CUSTOM -->
            <div
                class="group flex flex-col rounded-[28px]
                       border border-white/10
                       bg-white/[0.03]
                       p-7 sm:p-8
                       transition duration-500
                       hover:-translate-y-2
                       hover:border-blue-400/20"
            >

                <div class="flex items-center justify-between">

                    <span class="text-sm font-semibold text-blue-400">
                        Custom
                    </span>

                    <span class="text-xs text-gray-600">
                        03
                    </span>

                </div>


                <h3 class="mt-5 text-2xl font-black">
                    Sistem Informasi
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Untuk kebutuhan website atau sistem dengan
                    fitur khusus dan alur kerja yang lebih kompleks.
                </p>


                <div class="mt-7">

                    <span class="text-sm text-gray-500">
                        Harga
                    </span>

                    <div class="mt-1 text-3xl font-black">
                        Custom
                    </div>

                </div>


                <div class="my-8 h-px bg-white/5"></div>


                <ul class="space-y-4 text-sm text-gray-400">

                    <li class="flex gap-3">
                        <span class="text-blue-400">✓</span>
                        Custom features
                    </li>

                    <li class="flex gap-3">
                        <span class="text-blue-400">✓</span>
                        Database system
                    </li>

                    <li class="flex gap-3">
                        <span class="text-blue-400">✓</span>
                        Authentication
                    </li>

                    <li class="flex gap-3">
                        <span class="text-blue-400">✓</span>
                        Dashboard
                    </li>

                    <li class="flex gap-3">
                        <span class="text-blue-400">✓</span>
                        API integration
                    </li>

                </ul>


                <a
                    href="https://wa.me/6282286241853"
                    target="_blank"
                    class="mt-auto pt-8"
                >
                    <span
                        class="flex items-center justify-center
                               rounded-xl
                               border border-white/10
                               bg-white/[0.03]
                               px-5 py-3
                               text-sm font-semibold
                               transition
                               group-hover:border-blue-400/20
                               group-hover:bg-blue-400/10"
                    >
                        Diskusikan Project
                    </span>
                </a>

            </div>

        </div>


        <!-- Note -->
        <div
            class="mx-auto mt-8 max-w-3xl rounded-2xl
                   border border-white/5
                   bg-white/[0.02]
                   px-6 py-5
                   text-center"
        >
            <p class="text-xs leading-6 text-gray-500">
                Harga di atas merupakan harga awal dan dapat berubah
                berdasarkan jumlah halaman, fitur, tingkat kompleksitas,
                serta kebutuhan masing-masing project.
            </p>
        </div>

    </div>
</section>

<!-- FAQ -->
<section class="relative border-t border-white/5 py-24 sm:py-32">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <!-- Header -->
        <div class="mx-auto max-w-2xl text-center">

            <div
                class="mx-auto inline-flex items-center gap-2 rounded-full
                       border border-cyan-400/20
                       bg-cyan-400/10
                       px-4 py-2
                       text-xs font-medium
                       text-cyan-300"
            >
                <span class="h-1.5 w-1.5 rounded-full bg-cyan-400"></span>
                FAQ
            </div>

            <h2
                class="mt-5 text-3xl font-black tracking-tight
                       sm:text-4xl md:text-5xl"
            >
                Pertanyaan yang
                <span
                    class="bg-gradient-to-r from-cyan-400 to-blue-500
                           bg-clip-text text-transparent"
                >
                    Sering Ditanyakan
                </span>
            </h2>

            <p class="mt-5 leading-8 text-gray-400">
                Beberapa hal yang mungkin ingin kamu ketahui
                sebelum memulai project bersama EnzoCode.
            </p>

        </div>


        <!-- FAQ List -->
        <div
            x-data="{ active: null }"
            class="mt-14 space-y-4"
        >

            <!-- FAQ 1 -->
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-white/[0.03]"
            >

                <button
                    @click="active = active === 1 ? null : 1"
                    class="flex w-full items-center justify-between
                           gap-4 px-4 py-5 sm:gap-6 sm:px-6
                           transition duration-300
                           hover:bg-white/[0.03]"
                >

                    <span class="text-sm font-semibold sm:text-base">
                        Apakah website bisa dibuat sesuai permintaan?
                    </span>

                    <svg
                        class="h-5 w-5 shrink-0 text-cyan-400 transition duration-300"
                        :class="active === 1 ? 'rotate-45' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </button>

                <div
                    x-show="active === 1"
                    
                    class="border-t border-white/5"
                >
                    <p class="px-6 py-5 text-sm leading-7 text-gray-400">
                        Ya. Struktur halaman, tampilan, fitur, dan
                        kebutuhan lainnya dapat disesuaikan berdasarkan
                        scope project yang dibutuhkan.
                    </p>
                </div>

            </div>


            <!-- FAQ 2 -->
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-white/[0.03]"
            >

                <button
                    @click="active = active === 2 ? null : 2"
                    class="flex w-full items-center justify-between
                           gap-6 px-6 py-5 text-left
                           transition duration-300
                           hover:bg-white/[0.03]"
                >

                    <span class="text-sm font-semibold sm:text-base">
                        Berapa lama proses pengerjaan project?
                    </span>

                    <svg
                        class="h-5 w-5 shrink-0 text-cyan-400 transition duration-300"
                        :class="active === 2 ? 'rotate-45' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </button>

                <div
                    x-show="active === 2"
                    
                    class="border-t border-white/5"
                >
                    <p class="px-6 py-5 text-sm leading-7 text-gray-400">
                        Waktu pengerjaan bergantung pada jumlah halaman,
                        fitur, tingkat kompleksitas, serta scope project.
                        Estimasi akan dibahas sebelum project dimulai.
                    </p>
                </div>

            </div>


            <!-- FAQ 3 -->
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-white/[0.03]"
            >

                <button
                    @click="active = active === 3 ? null : 3"
                    class="flex w-full items-center justify-between
                           gap-6 px-6 py-5 text-left
                           transition duration-300
                           hover:bg-white/[0.03]"
                >

                    <span class="text-sm font-semibold sm:text-base">
                        Apakah desain website bisa dibuat custom?
                    </span>

                    <svg
                        class="h-5 w-5 shrink-0 text-cyan-400 transition duration-300"
                        :class="active === 3 ? 'rotate-45' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </button>

                <div
                    x-show="active === 3"
                   
                    class="border-t border-white/5"
                >
                    <p class="px-6 py-5 text-sm leading-7 text-gray-400">
                        Bisa. Kami dapat menyesuaikan tampilan berdasarkan
                        identitas visual, kebutuhan pengguna, dan karakter
                        bisnis yang ingin ditampilkan.
                    </p>
                </div>

            </div>


            <!-- FAQ 4 -->
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-white/[0.03]"
            >

                <button
                    @click="active = active === 4 ? null : 4"
                    class="flex w-full items-center justify-between
                           gap-6 px-6 py-5 text-left
                           transition duration-300
                           hover:bg-white/[0.03]"
                >

                    <span class="text-sm font-semibold sm:text-base">
                        Apakah bisa request fitur tertentu?
                    </span>

                    <svg
                        class="h-5 w-5 shrink-0 text-cyan-400 transition duration-300"
                        :class="active === 4 ? 'rotate-45' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </button>

                <div
                    x-show="active === 4"
                    
                    class="border-t border-white/5"
                >
                    <p class="px-6 py-5 text-sm leading-7 text-gray-400">
                        Bisa. Fitur tambahan dapat dibahas terlebih dahulu
                        untuk menentukan kebutuhan teknis, estimasi pengerjaan,
                        dan penyesuaian harga.
                    </p>
                </div>

            </div>


            <!-- FAQ 5 -->
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-white/[0.03]"
            >

                <button
                    @click="active = active === 5 ? null : 5"
                    class="flex w-full items-center justify-between
                           gap-6 px-6 py-5 text-left
                           transition duration-300
                           hover:bg-white/[0.03]"
                >

                    <span class="text-sm font-semibold sm:text-base">
                        Bagaimana cara memulai project?
                    </span>

                    <svg
                        class="h-5 w-5 shrink-0 text-cyan-400 transition duration-300"
                        :class="active === 5 ? 'rotate-45' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </button>

                <div
                    x-show="active === 5"
                    
                    class="border-t border-white/5"
                >
                    <p class="px-6 py-5 text-sm leading-7 text-gray-400">
                        Kamu cukup menghubungi EnzoCode melalui WhatsApp
                        dan menjelaskan kebutuhan project. Setelah itu kita
                        bisa membahas konsep, fitur, estimasi, dan langkah
                        pengerjaannya.
                    </p>
                </div>

            </div>


            <!-- FAQ 6 -->
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-white/[0.03]"
            >

                <button
                    @click="active = active === 6 ? null : 6"
                    class="flex w-full items-center justify-between
                           gap-6 px-6 py-5 text-left
                           transition duration-300
                           hover:bg-white/[0.03]"
                >

                    <span class="text-sm font-semibold sm:text-base">
                        Apakah EnzoCode menerima project sistem informasi?
                    </span>

                    <svg
                        class="h-5 w-5 shrink-0 text-cyan-400 transition duration-300"
                        :class="active === 6 ? 'rotate-45' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </button>

                <div
                    x-show="active === 6"
                    
                    class="border-t border-white/5"
                >
                    <p class="px-6 py-5 text-sm leading-7 text-gray-400">
                        Ya. EnzoCode dapat mengembangkan sistem berbasis web
                        untuk kebutuhan seperti pengelolaan data, presensi,
                        administrasi, dan kebutuhan operasional lainnya.
                    </p>
                </div>

            </div>

        </div>


        <!-- Bottom CTA -->
        <div class="mt-10 text-center">

            <p class="text-sm text-gray-500">
                Masih punya pertanyaan?
            </p>

            <a
                href="https://wa.me/6282286241853"
                target="_blank"
                class="mt-3 inline-flex items-center gap-2
                       text-sm font-semibold text-cyan-400
                       transition hover:text-cyan-300"
            >
                Tanya langsung lewat WhatsApp

                <svg
                    class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h14m-6-6 6 6-6 6"
                    />
                </svg>
            </a>

        </div>

    </div>
</section>

<!-- CONTACT -->
<section
    id="contact"
    class="relative overflow-hidden border-t border-white/5 py-24 sm:py-32 scroll-mt-24"
>
    <!-- Background Glow -->
    <div
        class="pointer-events-none absolute left-1/2 top-1/2
               h-[500px] w-[500px]
               -translate-x-1/2 -translate-y-1/2
               rounded-full
               bg-cyan-400/10
               blur-[130px]"
    ></div>

    <div class="relative mx-auto max-w-6xl px-6 lg:px-8">

        <div
            class="relative overflow-hidden rounded-[32px]
                   border border-cyan-400/20
                   bg-gradient-to-br
                   from-cyan-400/[0.08]
                   via-white/[0.03]
                   to-blue-500/[0.08]
                   p-8 sm:p-12 lg:p-16"
        >

            <!-- Decorative Grid -->
            <div
                class="pointer-events-none absolute inset-0 opacity-[0.025]"
                style="
                    background-image:
                        linear-gradient(rgba(255,255,255,.8) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,.8) 1px, transparent 1px);
                    background-size: 40px 40px;
                "
            ></div>


            <!-- Glow Top Right -->
            <div
                class="pointer-events-none absolute -right-24 -top-24
                       h-64 w-64 rounded-full
                       bg-cyan-400/10 blur-3xl"
            ></div>


            <div
                class="relative grid items-center gap-12 lg:grid-cols-[1.2fr_0.8fr]"
            >

                <!-- LEFT -->
                <div>

                    <div
                        class="inline-flex items-center gap-2 rounded-full
                               border border-cyan-400/20
                               bg-cyan-400/10
                               px-4 py-2
                               text-xs font-medium
                               text-cyan-300"
                    >
                        <span class="h-1.5 w-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                        Ready to Build?
                    </div>


                    <h2
                        class="mt-6 max-w-3xl
                               text-4xl font-black
                               leading-[1.05]
                               tracking-tight
                               sm:text-5xl
                               lg:text-6xl"
                    >
                        Punya Ide Website
                        atau Sistem?

                        <span
                            class="block mt-2
                                   bg-gradient-to-r
                                   from-cyan-400
                                   to-blue-500
                                   bg-clip-text
                                   text-transparent"
                        >
                            Mari Wujudkan Bersama.
                        </span>
                    </h2>


                    <p
                        class="mt-6 max-w-2xl
                               text-base
                               leading-8
                               text-gray-400
                               sm:text-lg"
                    >
                        Ceritakan kebutuhan bisnis atau project kamu.
                        Kami bantu mulai dari konsep, desain, hingga
                        pengembangan solusi digital yang sesuai kebutuhan.
                    </p>


                    <!-- Buttons -->
                    <div class="mt-9 flex flex-wrap gap-4">

                        <a
                            href="https://wa.me/6282286241853"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2
                                   rounded-2xl
                                   bg-cyan-400
                                   px-6 py-3.5
                                   text-sm font-black
                                   text-slate-950
                                   transition duration-300
                                   hover:bg-cyan-300
                                   hover:shadow-xl
                                   hover:shadow-cyan-400/20"
                        >
                            Chat via WhatsApp

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 12h14m-6-6 6 6-6 6"
                                />
                            </svg>
                        </a>


                        <a
                            href="#portfolio"
                            class="inline-flex items-center gap-2
                                   rounded-2xl
                                   border border-white/10
                                   bg-white/[0.04]
                                   px-6 py-3.5
                                   text-sm font-semibold
                                   text-white
                                   transition duration-300
                                   hover:bg-white/[0.08]"
                        >
                            Lihat Portfolio
                        </a>

                    </div>


                    <!-- Trust Points -->
                    <div
                        class="mt-8 flex flex-wrap
                               gap-x-7 gap-y-3
                               text-xs text-gray-500"
                    >

                        <span class="flex items-center gap-2">
                            <span class="text-cyan-400">✓</span>
                            Custom Development
                        </span>

                        <span class="flex items-center gap-2">
                            <span class="text-cyan-400">✓</span>
                            Modern UI/UX
                        </span>

                        <span class="flex items-center gap-2">
                            <span class="text-cyan-400">✓</span>
                            Responsive
                        </span>

                    </div>

                </div>


                <!-- RIGHT -->
                <div class="relative">

                    <!-- Contact Card -->
                    <div
                        class="rounded-[28px]
                               border border-white/10
                               bg-[#050816]/60
                               p-6
                               backdrop-blur-xl
                               sm:p-7"
                    >

                        <p class="text-xs font-medium uppercase tracking-[0.2em] text-gray-600">
                            Let's Connect
                        </p>

                        <h3 class="mt-3 text-2xl font-black">
                            Mulai dari ngobrol.
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Tidak perlu langsung tahu semuanya.
                            Cukup ceritakan ide atau kebutuhan project kamu.
                        </p>


                        <!-- WhatsApp -->
                        <a
                            href="https://wa.me/6282286241853"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-7 flex items-center gap-4
                                   rounded-2xl
                                   border border-green-400/10
                                   bg-green-400/[0.05]
                                   p-4
                                   transition duration-300
                                   hover:border-green-400/20
                                   hover:bg-green-400/[0.08]"
                        >

                            <div
                                class="flex h-11 w-11 shrink-0
                                       items-center justify-center
                                       rounded-xl
                                       bg-green-400/10
                                       text-green-400"
                            >
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M17.5 14.2c-.3-.1-1.8-.9-2.1-1-.3-.1-.5-.1-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.7-1.4-1.6-1.5-1.9-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.2-.5.1-.2 0-.4 0-.5 0-.1-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1 2.9 1.1 3.1c.1.2 2 3 4.8 4.2.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.2-.6-.3z"
                                    />

                                    <path
                                        d="M12.1 2.5A9.4 9.4 0 0 0 3.9 16l-1.4 5.2 5.3-1.4a9.5 9.5 0 1 0 4.3-17.3zm0 17.1c-1.5 0-2.9-.4-4.1-1.1l-.3-.2-3.1.8.8-3-.2-.3a7.6 7.6 0 1 1 6.9 3.8z"
                                    />
                                </svg>
                            </div>

                            <div class="min-w-0">
                                <p class="text-xs text-gray-600">
                                    WhatsApp
                                </p>

                                <p class="mt-1 text-sm font-semibold text-white">
                                    Chat langsung dengan EnzoCode
                                </p>
                            </div>

                        </a>


                        <!-- Portfolio -->
                        <a
                            href="#portfolio"
                            class="mt-3 flex items-center gap-4
                                   rounded-2xl
                                   border border-white/5
                                   bg-white/[0.02]
                                   p-4
                                   transition duration-300
                                   hover:border-cyan-400/20
                                   hover:bg-white/[0.04]"
                        >

                            <div
                                class="flex h-11 w-11 shrink-0
                                       items-center justify-center
                                       rounded-xl
                                       bg-cyan-400/10
                                       text-cyan-400"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M4 5h16v14H4zM8 9h8M8 13h5"
                                    />
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs text-gray-600">
                                    Portfolio
                                </p>

                                <p class="mt-1 text-sm font-semibold">
                                    Lihat project EnzoCode
                                </p>
                            </div>

                        </a>


                        <!-- Process -->
                        <div
                            class="mt-6 border-t border-white/5
                                   pt-6"
                        >

                            <p class="text-xs text-gray-600">
                                Simple Process
                            </p>

                            <div class="mt-4 flex items-center gap-2">

                                <span
                                    class="flex h-8 w-8 items-center justify-center
                                           rounded-lg
                                           bg-cyan-400/10
                                           text-[10px]
                                           font-bold
                                           text-cyan-400"
                                >
                                    01
                                </span>

                                <span class="h-px flex-1 bg-white/10"></span>

                                <span
                                    class="flex h-8 w-8 items-center justify-center
                                           rounded-lg
                                           bg-blue-400/10
                                           text-[10px]
                                           font-bold
                                           text-blue-400"
                                >
                                    02
                                </span>

                                <span class="h-px flex-1 bg-white/10"></span>

                                <span
                                    class="flex h-8 w-8 items-center justify-center
                                           rounded-lg
                                           bg-purple-400/10
                                           text-[10px]
                                           font-bold
                                           text-purple-400"
                                >
                                    03
                                </span>

                            </div>

                            <div class="mt-3 flex justify-between text-[10px] text-gray-600">
                                <span>Brief</span>
                                <span>Design</span>
                                <span>Build</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- FOOTER -->
<footer class="border-t border-white/5">

    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            <!-- Brand -->
            <div class="lg:col-span-2">

                <a href="#home" class="inline-flex items-center">
                    <img
                        src="/images/enzocode-logo.png"
                        alt="Enzocode.id"
                        class="w-[160px]"
                    >
                </a>

                <p class="mt-5 max-w-md text-sm leading-7 text-gray-500">
                    Membangun website dan aplikasi berbasis web
                    dengan desain modern serta solusi yang disesuaikan
                    dengan kebutuhan project.
                </p>

                <div class="mt-6 flex flex-wrap gap-3">

                    <a
                        href="https://wa.me/6282286241853"
                        target="_blank"
                        class="inline-flex items-center gap-2
                               rounded-xl border border-white/10
                               bg-white/[0.03]
                               px-4 py-2.5
                               text-xs font-medium text-gray-300
                               transition duration-300
                               hover:border-cyan-400/20
                               hover:bg-cyan-400/10
                               hover:text-cyan-400"
                    >
                        WhatsApp
                    </a>

                    <a
                        href="#portfolio"
                        class="inline-flex items-center gap-2
                               rounded-xl border border-white/10
                               bg-white/[0.03]
                               px-4 py-2.5
                               text-xs font-medium text-gray-300
                               transition duration-300
                               hover:border-cyan-400/20
                               hover:bg-cyan-400/10
                               hover:text-cyan-400"
                    >
                        Portfolio
                    </a>

                </div>

            </div>


            <!-- Explore -->
            <div>

                <h3 class="text-sm font-semibold text-white">
                    Explore
                </h3>

                <div class="mt-5 space-y-3">

                    <a
                        href="#home"
                        class="block text-sm text-gray-500 transition
                               hover:text-cyan-400"
                    >
                        Home
                    </a>

                    <a
                        href="#services"
                        class="block text-sm text-gray-500 transition
                               hover:text-cyan-400"
                    >
                        Layanan
                    </a>

                    <a
                        href="#portfolio"
                        class="block text-sm text-gray-500 transition
                               hover:text-cyan-400"
                    >
                        Portfolio
                    </a>

                    <a
                        href="#pricing"
                        class="block text-sm text-gray-500 transition
                               hover:text-cyan-400"
                    >
                        Harga
                    </a>

                </div>

            </div>


            <!-- Services -->
            <div>

                <h3 class="text-sm font-semibold text-white">
                    Services
                </h3>

                <div class="mt-5 space-y-3">

                    <p class="text-sm text-gray-500">
                        Landing Page
                    </p>

                    <p class="text-sm text-gray-500">
                        Company Profile
                    </p>

                    <p class="text-sm text-gray-500">
                        Sistem Informasi
                    </p>

                    <p class="text-sm text-gray-500">
                        UI/UX Design
                    </p>

                    <p class="text-sm text-gray-500">
                        Web Application
                    </p>

                </div>

            </div>

        </div>


        <!-- Bottom -->
        <div
            class="mt-12 flex flex-col gap-4
                   border-t border-white/5
                   pt-7
                   sm:flex-row
                   sm:items-center
                   sm:justify-between"
        >

            <p class="text-xs text-gray-600">
                © {{ date('Y') }} EnzoCode.id. All rights reserved.
            </p>

            <p class="text-xs text-gray-600">
                Built with Laravel & Tailwind CSS
            </p>

        </div>

    </div>

</footer>


@endsection
