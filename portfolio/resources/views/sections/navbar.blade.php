<section class="py-10 md:py-8">

    <div class="container max-w-screen-xl mx-auto px-4">

        <nav class="flex items-center justify-between mb-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/image/navbar-logo.png') }}" alt="Logo">
            </a>

            <div class="items-right">
                <a href="{{ route('about') }}">
                    <button class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500">About</button>
                </a>

                <a href="{{ route('contact') }}">
                    <button class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500">Contacts</button>
                </a>
                
                <a href="{{ route('projects') }}">
                    <button class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500">Projects</button>
                </a>
        </nav>

    </div>

</section>