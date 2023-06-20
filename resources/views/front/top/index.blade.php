<x-front-layout>
    <x-slot name="title">{{ __('Trang chủ') }}</x-slot>
    <div class="w-full overflow-x-hidden bg-slate-200 pt-[30px] pb-[60px]">
        <div class="banner-wrapper w-full">
            <div class="container mx-auto">
                <div class="main-wrapper w-full">
                    <div class="banner-card">
                        <div data-aos="fade-right" class="h-full w-full xl:w-1/2">
                            <img src="{{ Vite::image('banners/bnr_001.png') }}" alt=""
                                class="h-auto w-full max-w-full object-cover">
                        </div>
                    </div>
                    <div class="banner-card">
                        <div data-aos="fade-left" class="flex h-full w-1/2 flex-row xl:flex-col xl:space-y-[30px]">
                            <img src="{{ Vite::image('banners/bnr_002.png') }}" alt=""
                                class="h-auto w-full max-w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="market-category mb-[60px]">
        <div class="container mx-auto">
            <div class="justify-betweeen section-title mb-5 flex items-center">
                <h2 class="text-3xl font-bold leading-tight">My Market Category</h2>
                <div>
                    <a href="/view-more" class="text-lg font-bold">
                        View more
                        <span class="">
                            <img src="{{ Vite::image('arrow-viewmore.svg') }}" alt=""
                                class="inline-block h-4 w-4">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
