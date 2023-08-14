<?php $this->view('includes/header') ?>



<div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-6 lg:px-10">
    <form method="post" class="mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        <div class="flex flex-col items-center bg-white ">
            <img src="../public/sc.png" class="w-16 -mt-14 bg-white" alt="" />
        </div>
        <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
            Add User
        </h1>
        <!-- Error -->
        <?php if (count($errors) > 0): ?>
            <div x-data="{ open: true }" x-show="open"
                class="bg-red-50 border border-red-400 rounded text-red-800 text-sm p-4 flex justify-between">
                <div>
                    <div class=" items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <?php foreach ($errors as $error): ?>
                            <ul>
                                <li class="font-bold ">Info:
                                    <?= $error ?>
                                </li>

                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" @click="open = false" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
        <?php endif; ?>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-first-name">
                    First Name
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="grid-first-name" required value="<?= get_var('firstname') ?>" name="firstname" type="text"
                    placeholder="Ola">
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-last-name">
                    Last Name
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-last-name" type="text" required value="<?= get_var('lastname') ?>" name="lastname"
                    placeholder="Mide">
            </div>
        </div>


        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-gender">
                    Gender
                </label>
                <div class="relative">
                    <select name="gender" id="gender" required
                        class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                        id="grid-gender">
                        <option <?= get_select('gender', '') ?> value="">Select Gender</option>
                        <option <?= get_select('gender', 'male') ?> value="male">Male</option>
                        <option <?= get_select('gender', 'female') ?> value="female">Female</option>
                    </select>

                </div>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-rank">
                    Rank
                </label>
                <div class="relative">
                    <select name="rank" id="rank" required
                        class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                        id="grid-rank">
                        <option <?= get_select('rank', '') ?> value="">Select Rank</option>
                        <option <?= get_select('rank', 'student') ?> value="student">Student</option>
                        <option <?= get_select('rank', 'reception') ?> value="reception">Reception</option>
                        <option <?= get_select('rank', 'lecturer') ?> value="lecturer">Lecturer</option>
                        <option <?= get_select('rank', 'admin') ?> value="admin">Admin</option>

                        <?php if (Auth::getRank() == 'super_admin'): ?>
                            <option <?= get_select('rank', 'super_admin') ?> value="super_admin">Super Admin</option>
                        <?php endif; ?>
                    </select>

                </div>
            </div>


        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-password">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                    id="grid-password" required type="email" value="<?= get_var('email') ?>" name="email"
                    placeholder="email@mail.com">
            </div>
        </div>

        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-password">
                    Password
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="grid-password" type="password" required name="password" placeholder="******************">
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-confirm-password">
                    Confirm Password
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-confirm-password" type="password" required name="password2"
                    placeholder="******************">
            </div>
        </div>
        <div class="flex ">

            <button type="submit"
                class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 hover:bg-indigo-500 bg-indigo-600  ">ADD
                USER</button>

            <a href="<?= ROOT ?>/users"
                class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 hover:bg-red-500 bg-red-600  ">
                <button type="button">CANCEL</button>
            </a>
        </div>
    </form>
</div>


<?php $this->view('includes/footer') ?>