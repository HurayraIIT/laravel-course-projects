<section class="py-8 md:py-8">
    <div class="text-center">
        <h1 class="font-normal text-gray-900 text-4xl md:text-7xl leading-none mb-8">{{ $project['name'] }}</h1>

        <div class="bg-gray-50 px-8 py-10 rounded-md">

            <p class="font-normal text-gray-500 text-lg mb-16">{{ $project['description'] }}</p>

            <p class="font-normal text-gray-500 text-lg mb-16">Client: {{ $project['client'] }}</p>

            <p class="font-normal text-gray-500 text-lg mb-16">Started On: {{ $project['start_date'] }}</p>

            <p class="font-normal text-gray-500 text-lg mb-16">Completed On: {{ $project['end_date'] }}</p>

        </div>

        <a href="{{ route('projects') }}"
            class="px-7 py-3 md:px-9 md:py-4 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500">View All Projects</a>
    </div>
</section>
