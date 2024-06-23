<div x-data="{ open: false }">
    <div
        class="relative z-50 lg:hidden"
        role="dialog"
        aria-modal="true"
        x-show="open"
    >
        <div
            class="fixed inset-0 bg-gray-900/80"
            aria-hidden="true"
        ></div>

        <div class="fixed inset-0 flex">
            <div class="relative mr-16 flex w-full max-w-xs flex-1">
                <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                    <button
                        type="button"
                        class="-m-2.5 p-2.5"
                        @click="open = ! open"
                    >
                        <span class="sr-only">Close sidebar</span>
                        <svg
                            class="h-6 w-6 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <x-navigation.sidebar />
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-80 lg:flex-col">
        <x-navigation.sidebar />
    </div>

    <div class="lg:pl-72">
        <div class="sticky lg:hidden top-0 z-40 flex h-16 shrink-0 items-center justify-between gap-x-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
            <img
                class="h-8 w-auto"
                src="https://tailwindui.com/img/logos/mark.svg?color=white"
                alt="Your Company"
            >
            <button
                type="button"
                class="-m-2.5 p-2.5 text-gray-700 dark:text-gray-400 lg:hidden"
                @click="open = ! open"
            >
                <span class="sr-only">Open sidebar</span>
                <svg
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true"

                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>
            </button>
        </div>

        <main class="py-6">
            <div class="px-4 sm:px-6 lg:px-12">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
