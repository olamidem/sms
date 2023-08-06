<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container mx-auto shadow-lg">

    <div class="mx-auto max-w-screen-md px-4 py- sm:px-6 lg:px-10">
        <?php if ($row): ?>
            <form method="post" class="mb-0  rounded-lg p-4  sm:p-6 lg:p-8">

                <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                    Are you sure you want to Delete School?!
                </h1>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3 mt-6">

                        <input disabled
                            class=" bg-gray-400 appearance-none block w-full bg-grey-lighter text-lg font-bold text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            id="edit-school" type="text" value="<?= get_var('school', $row[0]->school) ?>" name="school"
                            placeholder="Enter School Name">
                        <input type="hidden" name="id">
                    </div>

                </div>

                <div class="flex justify-center space-x-4">
                    <a href="<?= ROOT ?>/schools">
                        <input type="submit" value="Delete"
                            class=" px-6 py-2  block rounded-md text-lg font-semibold text-indigo-100 hover:bg-gray-700 bg-indigo-600  " />
                    </a>

                    <a href="<?= ROOT ?>/schools">
                        <input type="button" value="Cancel"
                            class=" px-6 py-2  block rounded-md text-lg font-semibold text-indigo-100 bg-red-600  " />
                    </a>

                </div>
            </form>
        <?php else: ?>

            <div class=" ">
                <h1 class="text-center text-2xl font-bold  sm:text-3xl">
                    That school was not found!
                </h1>
                <button type="button"
                    class=" px-6 py-2 mt-5 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-red-600  "><a
                        href="<?= ROOT ?>/schools">CANCEL</a></button><br><br><b </div>
                <?php endif ?>
        </div>




    </div>

    <?php $this->view('includes/footer') ?>