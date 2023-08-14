<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container mx-auto shadow-lg">
    <div class="sm:flex items-center justify-between sm:flex-wrap mt-5">


        <a href="<?= ROOT ?>/signup">
            <button
                class="focus:ring-2 shadow-xl focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-gray-700 focus:outline-none rounded">
                <p class="text-sm font-medium leading-none text-white">Add User</p>
            </button>
        </a>
        <form action="">
            <div class="p-4 rounded bg-white text-indigo-500 shadow-xl flex md:flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" id="search"
                    placeholder="Search something.." />
            </div>
        </form>
    </div>

    <div class="flex flex-col md:flex-row gap-3 flex-wrap items-center justify-center">

        <?php if ($rows): ?>
            <?php foreach ($rows as $row): ?>
                <div class="mb-4 w-48 max-w-auto shadow-md border border-gray-200 rounded-lg dark:bg-gray-200 ">
                    <div class=" h-28 w-full checker-bg flex items-center justify-center p-4 text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4 ">
                        <div class="flex items-center justify-between ">
                            <h1 class="text-gray-600 uppercase font-medium truncate hover:text-clip">
                                <?= $row->firstname ?>
                                <?= $row->lastname ?>
                            </h1>
                        </div>
                        <span
                            class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none">
                            <?= str_replace("_", " ", $row->rank); ?>
                        </span>

                        <a href="#"
                            class="mt-2 text-white bg-blue-700 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Profile
                            <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h4 class="font-bold mb-4">No staff member were found at this time</h4>
        <?php endif; ?>

    </div>
</div>

<?php $this->view('includes/footer') ?>