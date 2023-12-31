<nav class="bg-indigo-600">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>


                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center md:items-stretch md:justify-start"
                x-data="{ open: false }">
                <div class="flex flex-shrink-0 items-center" @click="open = !open">
                    <img class="h-8 w-auto" src="<?= ROOT ?>/sc.png" alt="Your Company">
                    <p class="uppercase font-extrabold text-white ml-3">
                        <?= Auth::getSchool_name() ?>
                    </p>
                </div>
                <div class="hidden sm:ml-6 md:block ">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="<?= ROOT ?>"
                            class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium uppercase"
                            aria-current="page">Dashboard</a>
                        <a href="<?= ROOT ?>/schools"
                            class="text-white hover:bg-gray-700 hover:text-white rounded-md uppercase px-3 py-2 text-sm font-medium">schools</a>
                        <a href="<?= ROOT ?>/users"
                            class="text-white hover:bg-gray-700 hover:text-white rounded-md uppercase px-3 py-2 text-sm font-medium">staff</a>
                        <a href="<?= ROOT ?>/students"
                            class="text-white hover:bg-gray-700 hover:text-white rounded-md uppercase px-3 py-2 text-sm font-medium">students</a>
                        <a href="<?= ROOT ?>/classes"
                            class="text-white hover:bg-gray-700 hover:text-white rounded-md uppercase px-3 py-2 text-sm font-medium">CLASSES</a>
                        <a href="<?= ROOT ?>/schools/tests"
                            class="text-white hover:bg-gray-700 hover:text-white rounded-md uppercase px-3 py-2 text-sm font-medium">TESTS</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                <div x-data="{ open: false }" class="relative ml-3">
                    <div>

                        <button @click="open = !open" type="button"
                            class="relative flex font-extrabold text-white rounded-full items-center text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <?= Auth::getFirstname() ?>
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="<?= ROOT ?>/sc.png" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>

                    </div>

                    <div x-cloak x-show="open" @click.away="open = false"
                        class=" absolute right-0 z-10 mt-6 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->

                        <a href="<?= ROOT ?>/profile"
                            class="block px-4 py-2 text-sm text-gray-700   hover:bg-gray-700 hover:text-white"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
                        <a href="<?= ROOT ?>"
                            class="block px-4 py-2 text-sm text-gray-700   hover:bg-gray-700 hover:text-white"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Dashboard</a>
                        <a href="<?= ROOT ?>/logout"
                            class="block px-4 py-2 text-sm text-gray-700   hover:bg-gray-700 hover:text-white"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden " id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Dashboard</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base uppercase font-medium">schools</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base uppercase font-medium">staff</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base uppercase font-medium">students</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base uppercase font-medium">classes</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base uppercase font-medium">tests</a>
        </div>
    </div>

</nav>