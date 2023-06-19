{{-- resources/views/layouts/includes/sidebar.blade.php --}}
<aside id="default-sidebar"
    class="fixed top-0 left-0 h-full w-0 -translate-x-full overflow-y-auto overflow-x-hidden shadow-md transition-all duration-500 sm:w-14 sm:translate-x-0 lg:w-64"
    aria-label="Sidebar">
    <div class="h-screen divide-y bg-white px-3 py-4 text-gray-600">
        <div class="sidebar__header flex h-12 flex-row items-center justify-between">
            <x-application-logo class="hidden h-8 flex-shrink-0 px-2 md:flex lg:h-9">
            </x-application-logo>
        </div>
        <ul class="sidebar__content space-y-2 py-4 font-medium">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100"
                    :active="request() - > routeIs('admin.dashboard')">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                        </path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.components.index') }}"
                    class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Components</span>
                </a>
            </li>
            <li x-data="{ expanded: false }">
                <button type="button"
                    class="group flex w-full items-center rounded-lg p-2 text-gray-900 transition duration-75 hover:bg-gray-100"
                    x-on:click="expanded = ! expanded">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap text-left">Products</span>
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" sidebar-toggle-item
                        class="h-6 w-6 transition-transform duration-300"
                        :class="{
                            'rotate-180': expanded
                        }">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </button>
                <ul x-show="expanded" x-collapse.duration.500ms>
                    <li>
                        <a href="#"
                            class="group flex w-full items-center rounded-lg p-2 pl-11 text-base font-normal text-gray-900 transition duration-75 hover:bg-gray-100">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                </path>
                            </svg>
                            List
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="group flex w-full items-center rounded-lg p-2 pl-11 text-base font-normal text-gray-900 transition duration-75 hover:bg-gray-100">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                            Create
                        </a>
                    </li>
                </ul>
            </li>
            <li x-data="{ expanded: false }">
                <button type="button"
                    class="group flex w-full items-center rounded-lg p-2 text-gray-900 transition duration-75 hover:bg-gray-100"
                    x-on:click="expanded = ! expanded">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap text-left">Posts</span>
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" sidebar-toggle-item
                        class="h-6 w-6 transition-transform duration-300"
                        :class="{
                            'rotate-180': expanded
                        }">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </button>
                <ul x-show="expanded" x-collapse.duration.500ms>
                    <li>
                        <a href="{{ route('admin.posts.index') }}"
                            class="group flex w-full items-center gap-2 rounded-lg p-2 pl-11 text-base font-normal text-gray-900 transition duration-75 hover:bg-gray-100">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                </path>
                            </svg> List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.posts.create') }}"
                            class="group flex w-full items-center gap-2 rounded-lg p-2 pl-11 text-base font-normal text-gray-900 transition duration-75 hover:bg-gray-100">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15">
                                </path>
                            </svg>
                            Create
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                    <span
                        class="ml-3 inline-flex items-center justify-center rounded-full bg-yellow-400 px-2 text-[10px] font-bold uppercase text-gray-800">Pro</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Categories</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Tags</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Your
                        account</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
