<x-front-layout>
    <x-slot name="title">{{ __('Trang chủ') }}</x-slot>
    <div class="w-full overflow-x-hidden bg-slate-200 pt-[30px] pb-[60px]">
        <div class="w-full banner-wrapper">
            <div class="container mx-auto">
                <div class="flex main-wrapper">
                    <div class="banner-card xl:flex xl:space-x-[30px]  mb-[30px]">
                        <div data-aos="fade-right" class="w-full h-full xl:w-1/2">
                            <a href="">
                                <picture>
                                    <source media="(min-width: 1025px)" srcset="{{ Vite::image('banners/bnr_001.png') }}">
                                    <img src="{{ Vite::image('banners/bnr_002.png') }}" alt=""
                                        class="object-cover w-full h-auto max-w-full">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="banner-card xl:flex xl:space-x-[30px]  mb-[30px]">
                        <div data-aos="fade-left" class="flex h-full w-1/2 flex-row xl:flex-col xl:space-y-[30px]">
                            <div class="w-full">
                                <a href="">
                                    <img src="{{ Vite::image('banners/bnr_003.png') }}" alt=""
                                        class="object-cover w-full h-auto max-w-full">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="market-category mb-[60px]">
        <div class="container mx-auto">
            <div class="flex items-center justify-between mb-5 section-title">
                <h2 class="text-3xl font-bold leading-tight">My Market Category</h2>
                <div>
                    <a href="/view-more" class="text-lg font-bold">
                        View more
                        <span class="">
                            <img src="{{ Vite::image('arrow-viewmore.svg') }}" alt=""
                                class="inline-block w-4 h-4">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
