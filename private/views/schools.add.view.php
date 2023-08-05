<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container mx-auto shadow-lg">
    <?php $this->view('includes/breadcrumbs') ?>

    <div class="mx-auto max-w-screen-md px-4 py- sm:px-6 lg:px-10">

        <form method="post" class="mb-0  rounded-lg p-4  sm:p-6 lg:p-8">

            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                Add New School
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
            <?php endif; ?>

            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="school-name">
                        School Name
                    </label>
                    <input autofocus type="text"
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                        id="school-name" required="<?= get_var('school') ?>" name="school"
                        placeholder="Enter School Name...">
                </div>
            </div>

            <div class="flex ">

                <button type="submit"
                    class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 hover:bg-gray-700 bg-indigo-600  ">Create</button>

                <a href="<?= ROOT ?>/schools">
                    <button type="button"
                        class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 hover:bg-red-500 bg-red-600  ">CANCEL</button>
                </a>
            </div>
        </form>
    </div>
</div>

<?php $this->view('includes/footer') ?>