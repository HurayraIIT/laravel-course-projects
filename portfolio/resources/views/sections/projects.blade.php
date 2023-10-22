<section class="py-10 md:py-16" id="projects">

    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">My Projects</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">Below is a summary of the projects I
            created</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($data as $project)
                <a href="{{ route('project', ['id' => (int) $project['id']]) }}">
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h3 class="font-bold text-gray-600 text-lg">{{ $project['name'] }}</h6><br>

                            <h6 class="font-semibold text-gray-500 text-md">{{ $project['client'] }} 
                            </br></br>
                                <span
                                    class="font-medium text-gray-300 text-sm"> 
                                     Started On: {{ $project['start_date'] }}</span></h6>

                            </br>
                                <span
                                    class="font-medium text-gray-300 text-sm"> 
                                     Completed On: {{ $project['end_date'] }}</span></h6>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

</section>
