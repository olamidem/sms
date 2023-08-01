<?php $this->view('includes/header') ?>


<div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-6 lg:px-10">
    <form action="" class="mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        <div class="flex flex-col items-center bg-white ">
            <img src="../public/sc.png" class="w-16 -mt-14 bg-white" alt="" />
        </div>
        <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
            Add User
        </h1>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-first-name">
                    First Name
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="grid-first-name" type="text" placeholder="Ola">
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-last-name">
                    Last Name
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-last-name" type="text" placeholder="Mide">
            </div>
        </div>


        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-gender">
                    Gender
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                        id="grid-gender">
                        <option>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                </div>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-rank">
                    Rank
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                        id="grid-rank">
                        <option>Select Rank</option>
                        <option value="student">Student</option>
                        <option value="receptionist">Receptionist</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="admin">Admin</option>
                        <option value="super_admin">Super Admin</option>
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
                    id="grid-password" type="email" placeholder="email@mail.com">
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
                    id="grid-password" type="text" placeholder="******************">
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-confirm-password">
                    Confirm Password
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-confirm-password" type="text" placeholder="******************">
            </div>
        </div>
        <div class="flex ">

            <button
                class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 hover:bg-indigo-500 bg-indigo-600  ">ADD
                USER</button>

            <button
                class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 hover:bg-red-500 bg-red-600  ">CANCEL</button>

        </div>
    </form>
</div>


<?php $this->view('includes/footer') ?>