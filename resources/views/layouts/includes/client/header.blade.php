{{-- resources/views/layouts/includes/header.blade.php --}}
<header class="relative">
    <div class="w-full h-10 bg-white border-b top__bar">
        <div class="container h-full mx-auto">
            <div class="flex items-center justify-between h-full">
                <div class="topbar-nav">
                    <ul class="flex space-x-6">
                        <li><a href=""><span class="text-xs font-medium leading-6 text-black">Account</span></a>
                        </li>
                        <li><a href=""><span class="text-xs font-medium leading-6 text-black">Tracking
                                    Order</span></a>
                        </li>
                        <li><a href=""><span class="text-xs font-medium leading-6 text-black">Support</span></a>
                        </li>
                    </ul>
                </div>
                <div class="hidden topbar-dropdowns md:block">
                    <div class="flex space-x-6">
                        <div class="flex items-center space-x-6 country-select">
                            <x-bladewind.dropmenu>
                                <x-slot name="trigger">
                                    <x-bladewind.button type="secondary" size="tiny">
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
                                    <x-bladewind.button type="secondary" size="tiny">
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
                                    <x-bladewind.button type="secondary" size="tiny">
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
    <div class="w-full h-10 bg-white border-gray-100">
        <div class="quomodo-shop-drawer block h-[60px] w-full bg-white lg:hidden">
            <div class="relative h-full">
                <div class="flex items-center justify-between w-full h-full px-5">
                    <div>
                        <img src="{{ Vite::image('hamburger.svg') }}" alt="" class="w-6 h-6">
                    </div>
                    <div>
                        <a href="">
                            <img src="{{ Vite::image('logo.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="relative cursor-pointer cart">
                        <a href="/cart">
                            <span>
                                <img src="{{ Vite::image('cart.svg') }}" alt="" class="w-6 h-6">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
