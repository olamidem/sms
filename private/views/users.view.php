<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container mx-auto shadow-lg">
    <?php $this->view('includes/breadcrumbs') ?>

    <div class="flex flex-col md:flex-row gap-3 flex-wrap">

        <?php if ($rows): ?>
            <?php foreach ($rows as $row): ?>
                <div class="mb-4 w-full md:w-48 max-w-sm mx-auto shadow-md border border-gray-200 rounded-lg dark:bg-gray-200 ">
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
                            Read more
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
            <h4>No user were found at this time</h4>
        <?php endif; ?>

    </div>
</div>

<?php $this->view('includes/footer') ?>