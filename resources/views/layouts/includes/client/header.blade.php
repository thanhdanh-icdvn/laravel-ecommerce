{{-- resources/views/layouts/includes/header.blade.php --}}
<header class="relative">
    <div class="top__bar h-10 w-full border-b bg-white">
        <div class="mx-auto h-full max-w-[1261px] px-6">
            <div class="flex h-full items-center justify-between">
                <div class="topbar-nav">
                    <ul class="flex space-x-6">
                        <li>
                            <a href="">
                                <span
                                    class="text-xs font-medium leading-6 text-black">
                                    Account
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span
                                    class="text-xs font-medium leading-6 text-black">
                                    Track order
                                </span>
                            </a>W
                        </li>
                        <li>
                            <a href="">
                                <span
                                    class="text-xs font-medium leading-6 text-black">
                                    Support
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-dropdowns hidden md:block">
                    <div class="flex space-x-6">
                        <div class="country-select flex items-center space-x-6">
                            <x-bladewind.dropmenu>
                                <x-slot name="trigger">
                                    <x-bladewind.button type="secondary"
                                        size="tiny">
                                        Options
                                    </x-bladewind.button>
                                </x-slot>

                                <x-bladewind.dropmenu-item>
                                    Edit
                                </x-bladewind.dropmenu-item>
                                <x-bladewind.dropmenu-item>
                                    Invite John to Marketing
                                </x-bladewind.dropmenu-item>
                            </x-bladewind.dropmenu>
                            <x-bladewind.dropmenu>
                                <x-slot name="trigger">
                                    <x-bladewind.button type="secondary"
                                        size="tiny">
                                        Options
                                    </x-bladewind.button>
                                </x-slot>

                                <x-bladewind.dropmenu-item>
                                    Edit
                                </x-bladewind.dropmenu-item>
                                <x-bladewind.dropmenu-item>
                                    Invite John to Marketing
                                </x-bladewind.dropmenu-item>
                            </x-bladewind.dropmenu>
                            <x-bladewind.dropmenu>
                                <x-slot name="trigger">
                                    <x-bladewind.button type="secondary"
                                        size="tiny">
                                        Options
                                    </x-bladewind.button>
                                </x-slot>

                                <x-bladewind.dropmenu-item>
                                    Edit
                                </x-bladewind.dropmenu-item>
                                <x-bladewind.dropmenu-item>
                                    Invite John to Marketing
                                </x-bladewind.dropmenu-item>
                            </x-bladewind.dropmenu>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-10 w-full border-gray-100 bg-white">
        <div
            class="quomodo-shop-drawer block h-[60px] w-full bg-white lg:hidden">
            <div class="relative h-full">
                <div
                    class="flex h-full w-full items-center justify-between px-5">
                    <div>
                        <img src="{{ Vite::image('hamburger.svg') }}"
                            alt="" class="h-6 w-6">
                    </div>
                    <div>
                        <a href="">
                            <img src="{{ Vite::image('logo.svg') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="cart relative cursor-pointer">
                        <a href="/cart">
                            <span>
                                <img src="{{ Vite::image('cart.svg') }}"
                                    alt="" class="h-6 w-6">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
