<header
    x-data="{
        open: false,
        scrolled: false,
        active: 'home'
    }"
    x-init="
        const updateScroll = () => {
            scrolled = window.scrollY > 20
        }

        updateScroll()

        window.addEventListener('scroll', updateScroll)

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {

                if (!entry.isIntersecting) return

                const id = entry.target.id

                if (id === 'contact') {
                    active = ''
                    return
                }

                if (['home', 'services', 'portfolio', 'pricing'].includes(id)) {
                    active = id
                }

            })
        }, {
            rootMargin: '-25% 0px -55% 0px',
            threshold: 0.01
        })

        document.querySelectorAll('section[id]').forEach(section => {
            observer.observe(section)
        })
    "
>

    <div class="max-w-7xl mx-auto
                flex items-center justify-between
                px-6 lg:px-8
                h-20">

        {{-- Logo --}}
        <a href="#home" class="flex items-center shrink-0">

            <img
                src="/images/enzocode-logo.png"
                alt="Enzocode.id"
                class="w-[145px] h-auto object-contain
                        sm:w-[170px]
                        transition duration-300"ion-300"
                :class="scrolled ? 'scale-95' : 'scale-100'"
            >

        </a>

        {{-- Desktop Navigation --}}
<nav class="hidden md:flex items-center gap-8 text-sm font-medium">

    <!-- Home -->
    <a
        href="#home"
        @click="active = 'home'"
        class="relative flex items-center py-7 transition duration-300"
        :class="active === 'home'
            ? 'text-cyan-400'
            : 'text-gray-300 hover:text-cyan-400'"
    >
        Home

        <span
            x-show="active === 'home'"
            x-transition
            class="absolute bottom-0 left-1/2
                   h-px w-6
                   -translate-x-1/2
                   bg-cyan-400"
        ></span>
    </a>


    <!-- Layanan -->
    <a
        href="#services"
        @click="active = 'services'"
        class="relative flex items-center py-7 transition duration-300"
        :class="active === 'services'
            ? 'text-cyan-400'
            : 'text-gray-300 hover:text-cyan-400'"
    >
        Layanan

        <span
            x-show="active === 'services'"
            x-transition
            class="absolute bottom-0 left-1/2
                   h-px w-6
                   -translate-x-1/2
                   bg-cyan-400"
        ></span>
    </a>


    <!-- Portfolio -->
    <a
        href="#portfolio"
        @click="active = 'portfolio'"
        class="relative flex items-center py-7 transition duration-300"
        :class="active === 'portfolio'
            ? 'text-cyan-400'
            : 'text-gray-300 hover:text-cyan-400'"
    >
        Portfolio

        <span
            x-show="active === 'portfolio'"
            x-transition
            class="absolute bottom-0 left-1/2
                   h-px w-6
                   -translate-x-1/2
                   bg-cyan-400"
        ></span>
    </a>


    <!-- Harga -->
    <a
        href="#pricing"
        @click="active = 'pricing'"
        class="relative flex items-center py-7 transition duration-300"
        :class="active === 'pricing'
            ? 'text-cyan-400'
            : 'text-gray-300 hover:text-cyan-400'"
    >
        Harga

        <span
            x-show="active === 'pricing'"
            x-transition
            class="absolute bottom-0 left-1/2
                   h-px w-6
                   -translate-x-1/2
                   bg-cyan-400"
        ></span>
    </a>

</nav>

        {{-- Right Side --}}
        <div class="flex items-center gap-4">

            {{-- Consultation Button --}}
            <a
                href="https://wa.me/6282286241853"
                target="_blank"
                class="hidden sm:inline-flex
                       items-center justify-center
                       px-5 py-3
                       rounded-xl
                       bg-cyan-400
                       text-black
                       font-semibold
                       hover:bg-cyan-300
                       hover:shadow-lg
                       hover:shadow-cyan-400/20
                       transition duration-300"
            >
                Konsultasi
            </a>

            {{-- Mobile Menu Button --}}
            <button
                @click="open = !open"
                class="md:hidden
                       w-11 h-11
                       flex items-center justify-center
                       rounded-xl
                       border border-white/10
                       bg-white/5"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

            </button>

        </div>

    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="md:hidden
           max-h-[calc(100vh-5rem)]
           overflow-y-auto
           border-t border-white/10
           bg-[#050816]/95
           backdrop-blur-xl"
>

        <div class="max-w-7xl mx-auto px-6 py-6">

            <nav class="flex flex-col gap-5 text-gray-300">

                <a
                    href="#home"
                    @click="open = false; active = 'home'"
                    class="transition"
                    :class="active === 'home'
                        ? 'text-cyan-400'
                        : 'text-gray-300 hover:text-cyan-400'"
                >
                    Home
                </a>

                <a
                    href="#services"
                    @click="open = false; active = 'services'"
                    class="transition"
                    :class="active === 'services'
                        ? 'text-cyan-400'
                        : 'text-gray-300 hover:text-cyan-400'"
                >
                    Layanan
                </a>

                <a
                    href="#portfolio"
                    @click="open = false; active = 'portfolio'"
                    class="transition"
                    :class="active === 'portfolio'
                        ? 'text-cyan-400'
                        : 'text-gray-300 hover:text-cyan-400'"
                >
                    Portfolio
                </a>

                <a
                    href="#pricing"
                    @click="open = false; active = 'pricing'"
                    class="transition"
                    :class="active === 'pricing'
                        ? 'text-cyan-400'
                        : 'text-gray-300 hover:text-cyan-400'"
                >
                    Harga
                </a>

                <a
                    href="https://wa.me/6282286241853"
                    target="_blank"
                    class="inline-flex items-center justify-center
                           px-5 py-3
                           rounded-xl
                           bg-cyan-400
                           text-black
                           font-semibold"
                >
                    Konsultasi
                </a>

            </nav>

        </div>

    </div>
<div
    class="absolute bottom-0 left-0 h-px
           bg-gradient-to-r
           from-transparent
           via-cyan-400/50
           to-transparent
           transition-all duration-500"
    :class="scrolled ? 'w-full opacity-100' : 'w-0 opacity-0'"
></div>
</header>