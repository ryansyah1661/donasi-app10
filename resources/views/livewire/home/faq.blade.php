<div>
    <div class="container mt-52 rounded-2xl bg-light-yellow flex flex-col justify-center items-center pb-20">
        <div class="bg-secondary w-32 h-32 rounded-full text-center -mt-16">
            <img src="{{ asset('img/question.svg') }}" class="absolute" width="80" alt="">
        </div>

        <div class="mt-10 text-center mb-16">
            <h1 class="text-5xl">Frequently asked Questions</h1>
            <p class="mt-5">Do you have another question? Contact us at <a class="underline" href="mailto:ask@donasi.com">ask@donasi.com</a></p>
        </div>

        <div class="w-full border-gray6 py-3" x-data="{open: false}">
            <div class="flex justify-between">
                <h3 class="text-2xl text-primary">What does Donasi do?</h3>
            <button @click="open = !(open)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                  
            </button>
            </div>
            <p class="leading-relaxed mt-5" x-show="open">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae vel illo id nemo culpa sit repellendus minus minima? Animi quia, explicabo tempore totam incidunt sunt. Itaque voluptates nesciunt laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla minus iure distinctio tenetur dicta voluptates, porro inventore perferendis nostrum laboriosam animi delectus, consectetur voluptatibus dignissimos adipisci consequatur laborum magni?
            </p>
        </div>
        <div class="w-full border-gray6 py-3" x-data="{open: false}">
            <div class="flex justify-between">
                <h3 class="text-2xl text-primary">How was Donasi founded?</h3>
            <button @click="open = !(open)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                  
            </button>
            </div>
            <p class="leading-relaxed mt-5" x-show="open">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae vel illo id nemo culpa sit repellendus minus minima? Animi quia, explicabo tempore totam incidunt sunt. Itaque voluptates nesciunt laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla minus iure distinctio tenetur dicta voluptates, porro inventore perferendis nostrum laboriosam animi delectus, consectetur voluptatibus dignissimos adipisci consequatur laborum magni?
            </p>
        </div>
        <div class="w-full border-gray6 py-3" x-data="{open: false}">
            <div class="flex justify-between">
                <h3 class="text-2xl text-primary">Where does Donasi operate?</h3>
            <button @click="open = !(open)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                  
            </button>
            </div>
            <p class="leading-relaxed mt-5" x-show="open">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae vel illo id nemo culpa sit repellendus minus minima? Animi quia, explicabo tempore totam incidunt sunt. Itaque voluptates nesciunt laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla minus iure distinctio tenetur dicta voluptates, porro inventore perferendis nostrum laboriosam animi delectus, consectetur voluptatibus dignissimos adipisci consequatur laborum magni?
            </p>
        </div>
        <div class="w-full border-gray6 py-3" x-data="{open: false}">
            <div class="flex justify-between">
                <h3 class="text-2xl text-primary">How can I donate to Donasi?</h3>
            <button @click="open = !(open)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                  
            </button>
            </div>
            <p class="leading-relaxed mt-5" x-show="open">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae vel illo id nemo culpa sit repellendus minus minima? Animi quia, explicabo tempore totam incidunt sunt. Itaque voluptates nesciunt laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla minus iure distinctio tenetur dicta voluptates, porro inventore perferendis nostrum laboriosam animi delectus, consectetur voluptatibus dignissimos adipisci consequatur laborum magni?
            </p>
        </div>
        <div class="w-full border-gray6 py-3" x-data="{open: false}">
            <div class="flex justify-between">
                <h3 class="text-2xl text-primary">Are donations to Donasi tax-deductible?</h3>
            <button @click="open = !(open)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                  
            </button>
            </div>
            <p class="leading-relaxed mt-5" x-show="open">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae vel illo id nemo culpa sit repellendus minus minima? Animi quia, explicabo tempore totam incidunt sunt. Itaque voluptates nesciunt laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla minus iure distinctio tenetur dicta voluptates, porro inventore perferendis nostrum laboriosam animi delectus, consectetur voluptatibus dignissimos adipisci consequatur laborum magni?
            </p>
        </div>
        <div class="w-full border-gray6 py-3" x-data="{open: false}">
            <div class="flex justify-between">
                <h3 class="text-2xl text-primary">Does Donasi accept non-monetary donations?</h3>
            <button @click="open = !(open)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                  
            </button>
            </div>
            <p class="leading-relaxed mt-5" x-show="open">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae vel illo id nemo culpa sit repellendus minus minima? Animi quia, explicabo tempore totam incidunt sunt. Itaque voluptates nesciunt laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla minus iure distinctio tenetur dicta voluptates, porro inventore perferendis nostrum laboriosam animi delectus, consectetur voluptatibus dignissimos adipisci consequatur laborum magni?
            </p>
        </div>
    </div>
    
</div>
