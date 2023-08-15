<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>


<div class="container mx-auto shadow-lg">

    <?php if ($row): ?>

        <div class="items-center md:items-center flex flex-col mt-5 md:flex-row md:space-x-6">

            <div class="md:flex flex-col items-end p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/2">

                <img src="<?= get_image($row->gender) ?>" class="w-40" rounded-full alt="" />

            </div>


            <div class=" flex-col items-baseline p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/2">
                <table class="text-sm my-3 mt-">
                    <tbody>
                        <tr>
                            <td class="px-2 py-1 text-gray-500 font-bold">First Name:</td>
                            <td class="px-2 py-1 capitalize">
                                <?= esc($row->firstname) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1 text-gray-500 font-bold">Last Name:</td>
                            <td class="px-2 py-1 capitalize">
                                <?= esc($row->lastname) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1 text-gray-500 font-bold">Email:</td>
                            <td class="px-2 py-1">
                                <?= esc($row->email) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1 text-gray-500 font-bold">Gender:</td>
                            <td class="px-2 py-1 capitalize">
                                <?= esc($row->gender) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1 text-gray-500 font-bold">Date Created:</td>
                            <td class="px-2 py-1">
                                <?= esc(get_date($row->date)) ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

        <div class="mb-10">
            <div class="flex flex-col md:flex-row gap-5 justify-center">
                <button class=" text-white p-4 rounded bg-indigo-500 shadow-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> Basic Profile</button>

                <button class="p-4 rounded bg-white text-indigo-500 shadow-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg> Classes </button>

                <button class="p-4 rounded bg-white text-indigo-500 shadow-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg> Tests </button>
                <div>
                    <form action="">
                        <div class="p-4 rounded bg-white text-indigo-500 shadow-md flex md:flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text"
                                id="search" placeholder="Search something.." />
                        </div>
                    </form>
                </div>
            </div>
            <div class="shadow-xl border border-gray-100 font-light p-8 rounded text-gray-500 bg-white mt-6"> Raw denim you
                You're using 12.90 GB (86%) of the 15 GB of storage available in your Google Account, which means that
                you're almost out of room for your Gmail, Google Drive and Google Photos. Once it's full, you may not be
                able to send and receive emails on your Gmail account. To prevent any interruption, get more storage with a
                Google One membership. Plans start at ₦390.00 a month.
            </div>
        </div>
    <?php else: ?>
        <h4>Profile not found.</h4>
    <?php endif ?>


    <!-- <div class="flex flex-col md:flex-row gap-5 justify-center">
        <button class="text-white p-4 rounded bg-indigo-500 shadow-md flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> Basic Profile</button>

        <button class="p-4 rounded bg-white text-indigo-500 shadow-md flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg> Classes</button>

        <button class="p-4 rounded bg-white text-indigo-500 shadow-md flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002 2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
            </svg> Tests</button>

        <form action="" class="md:ml-auto">
            <div class="p-4 rounded bg-white text-indigo-500 shadow-md flex md:flex-row">
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

    <div class="shadow-xl border border-gray-100 font-light p-8 rounded text-gray-500 bg-white mt-6"> Raw denim you
        You're using 12.90 GB (86%) of the 15 GB of storage available in your Google Account, which means that
        you're almost out of room for your Gmail, Google Drive and Google Photos. Once it's full, you may not be
        able to send and receive emails on your Gmail account. To prevent any interruption, get more storage with a
        Google One membership. Plans start at ₦390.00 a month.
    </div> -->

</div>


<?php $this->view('includes/footer') ?>