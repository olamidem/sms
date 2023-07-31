<?php $this->view('includes/header') ?>


<div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-6 lg:px-10">
    <div class="mx-auto max-w-xl">
        <form action="" class="mb-0 mt space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
            <div class="flex flex-col items-center bg-white ">
                <img src="../public/sc.png" class="w-16 -mt-14 bg-white" alt="" />
            </div>
            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                Add User
            </h1>
            <div class="flex flex-col md:flex-row space-y-2 mx-auto max-w-xl md:space-x-4">
                <label for="first_name" class="sr-only">First name</label>

                <div class="w-full">
                    <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="First name" />
                </div>
                <label for="First_name" class="sr-only">Last name</label>

                <div class="w-full">
                    <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Last name" />
                </div>
            </div>

            <div class="flex flex-col md:flex-row space-y-2 mx-auto max-w-xl md:space-x-4">
                <label for="first_name" class="sr-only">gender</label>

                <div class="w-full">
                    <select id="selectOption"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm  border focus:outline-none focus:border-indigo-600">
                        <option value="Gender">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="first_name" class="sr-only">rank</label>

                    <select id="selectOption"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm border focus:outline-none focus:border-indigo-600">
                        <option value="Gender">Rank</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

            </div>

            <div>
                <label for="password" class="sr-only">Password</label>

                <div class="relative">
                    <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter password" />
                </div>
            </div>
            <div>
                <label for="password" class="sr-only">Confirm Password</label>

                <div class="relative">
                    <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Confirm Password" />

                </div>
            </div>

            <button type="submit"
                class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                Add User
            </button>

            <!-- <p class="text-center text-sm text-gray-500">
                No account?
                <a class="underline" href="">Sign up</a>
            </p> -->
        </form>
    </div>
</div>





<?php $this->view('includes/footer') ?>