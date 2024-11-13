<div>
    <div class="container mt-52">
        <div class="flex justify-between items-center mb-28">
            <div><h1 class="text-5xl font-bold">Cases you can help with</h1></div>
            <div class="flex space-x-3">
                <button class="flex items-center justify-center w-16 h-16 border-2 border-black rounded-full customNextBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button class="flex items-center justify-center w-16 h-16 border-2 border-black rounded-full customPrevBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>

           


        <div class="owl-carousel owl-theme">
            @foreach ($projects as $project)
            <div class="item">
                <div class="border border-gray rounded-lg p-4">
                    <img src="/storage/{{ $project->cover  }}" class="rounded-lg w-full" alt="">
                    <h1 class="text-3xl font-bold mt-3">{{ $project->tittle }}</h1>
                    <p class="text-gray4 mt-3">{{ $project->decription }}</p>
                    <div class="flex text-md">
                        <div class="font-bold mr-2">Rp200.000</div>
                        <div>Raised of Rp {{ $project->budget }}</div>
                    </div>
                    <div class="w-full h-4 mb-4 bg-gray mt-3 rounded-full">
                        <div class="h-4 bg-secondary rounded-full" style="width: 45%"></div>
                    </div>
                    <div class="flex items-center justify-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-rose">
                            <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                        </svg>
                        <div class="text-sm">
                            <span class="font-bold">3,034</span> Donators
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>
