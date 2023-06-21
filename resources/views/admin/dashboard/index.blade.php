{{-- resources/views/admin/dashboard/index.blade.php --}}
<x-admin-layout>
    <x-slot name="title">{{ __('Dashboard') }}</x-slot>
    <div class="flex flex-col flex-wrap justify-between gap-4 lg:flex-row">
        <div class="space-y flex flex-col">
            <h2 class="text-2xl font-bold leading-normal"><span
                    class="font-light">Hello,
                </span>{{ Auth::user()->name }}
            </h2>
            <p class="text-sm font-light text-zinc-500">Have a productive new
                day!</p>
        </div>
        <div class="flex flex-1 flex-row justify-center gap-2">
            <form class="flex w-full items-center">
                <div class="relative flex w-full">
                    <input type="search" id="simple-search"
                        class="block w-full rounded-lg rounded-r-none border border-gray-200 bg-transparent p-3.5 text-sm text-gray-900 placeholder-zinc-500 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="{{ __('Search anything here...') }}"
                        required>
                </div>
                <button type="submit"
                    class="ml-0 rounded-lg rounded-l-none border border-gray-200 p-3 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="h-6 w-6 stroke-zinc-500" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                        </path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
            <button
                class="relative aspect-square rounded-lg border border-gray-200 p-3">
                <svg fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                    </path>
                </svg>
                <span class="absolute inset-0 -mr-6 object-right-top">
                    <div
                        class="inline-flex items-center rounded-full border-2 border-white bg-red-500 px-1.5 py-0.5 text-xs font-semibold leading-4 text-white">
                        6
                    </div>
                </span>
            </button>
        </div>
    </div>

    <section class="mt-10">
        <ul
            class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
            <li>
                <div
                    class="flex flex-col items-center justify-center rounded-lg bg-yellow-100 p-5 font-bold">
                    <div class="icon-wrap rounded-full bg-yellow-300 p-2.5">
                        <svg fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 rounded-full stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <p class="mt-3 capitalize text-gray-700">Total Revenue</p>
                    <p class="mt-1 text-2xl text-gray-700">
                        {{ number_format(23456789, 0) }}</p>
                </div>
            </li>
            <li>
                <div
                    class="flex flex-col items-center justify-center rounded-lg bg-blue-100 p-5 font-bold">
                    <div class="icon-wrap rounded-full bg-blue-400 p-2.5">
                        <svg fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 rounded-full stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z">
                            </path>
                        </svg>
                    </div>
                    <p class="mt-3 capitalize text-gray-700">Profit rate</p>
                    <p class="mt-1 text-2xl text-gray-700">
                        {{ 23.34 }}
                    </p>
                </div>
            </li>
            <li>
                <div
                    class="flex flex-col items-center justify-center rounded bg-red-100 p-5 font-bold">
                    <div class="icon-wrap rounded-full bg-red-400 p-2.5">
                        <svg fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 rounded-full stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9">
                            </path>
                        </svg>
                    </div>
                    <p class="mt-3 capitalize text-gray-700">Orders</p>
                    <p class="mt-1 text-2xl text-gray-700">
                        {{ number_format(6789) }}</p>
                </div>
            </li>
            <li>
                <div
                    class="flex flex-col items-center justify-center rounded bg-green-200 p-5 font-bold">
                    <div class="icon-wrap rounded-full bg-green-400 p-2.5">
                        <svg fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 rounded-full stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                            </path>
                        </svg>
                    </div>
                    <p class="mt-3 capitalize text-gray-700">New customer</p>
                    <p class="mt-1 text-2xl text-gray-700">
                        {{ number_format(23345) }}</p>
                </div>
            </li>
        </ul>
    </section>

    <section class="mt-10">
        <h3 class="text-xl font-bold capitalize">Details Analysis</h3>
        <div style="width: 600px; margin: auto;">
            <canvas id="myChart"></canvas>
        </div>
    </section>

    @push('scripts')
        <script type="module">
            const labels = [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ];

            function getRandomInt(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min) + min); // The maximum is exclusive and the minimum is inclusive
            }
            const data = {
                labels: labels,
                datasets: [{
                        label: "Outcome",
                        backgroundColor: "rgb(88, 186, 171)",
                        borderColor: "rgb(88, 186, 171)",
                        data: [
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                        ],
                        order: "1",
                        pointStyle:'circle'
                    },
                    {
                        label: "Income",
                        backgroundColor: "rgb(246, 188, 0)",
                        borderColor: "rgb(246, 188, 0)",
                        data: [
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                        ],
                        order: "1",
                        pointStyle:'circle'
                    },
                    {
                        label: "Revenue",
                        backgroundColor: "rgb(62, 67, 95)",
                        borderColor: "rgb(62, 67, 95)",
                        data: [
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                            getRandomInt(0, 99999),
                        ],
                        type: "line",
                        order: "0",
                        pointStyle:'circle'
                    },
                ],
            };

            const config = {
                type: "bar",
                data: data,
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Chart Title',
                        },
                        legend: {
                            labels: {
                                usePointStyle: true,
                            },
                        }
                    }
                }
            }

            new Chart(document.getElementById("myChart"), config);
        </script>
    @endpush
</x-admin-layout>
