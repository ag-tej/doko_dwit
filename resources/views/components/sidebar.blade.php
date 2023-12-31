<div>
    <div class="flex justify-between items-center gap-5 my-4">
        <a href="/" class="w-24">
            <img src="{{ asset('images/doko_logo.svg') }}" alt="doko_logo">
        </a>
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
            type="button" class="inline-flex items-center text-sm sm:text-base text-gray-300">
            <svg class="w-8 h-8" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
    </div>
    <aside id="default-sidebar" class="fixed z-40 w-64 transition-transform -translate-x-full h-screen"
        aria-label="Sidebar">
        <div class="h-full p-8 overflow-y-auto bg-[#18212f]">
            <p class="text-[#ef4444] text-xl font-bold">CSIT BATCHES</p>
            <ul class="pt-6 font-medium flex flex-col gap-4">
                @for ($i = 0; $i < 10; $i++)
                    <li>
                        <a href="#" class="p-2 text-gray-400 hover:text-white">Batch of {{ 2011 + $i }}</a>
                    </li>
                    <hr class="border-[#242c34]">
                @endfor
            </ul>
        </div>
    </aside>
</div>
