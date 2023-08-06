<div class=" p-4 flex items-center  justify-center flex-wrap">
    <ul class="flex items-center">

        <?php if (isset($crumbs)): ?>
            <?php foreach ($crumbs as $crumb): ?>
                <li class="inline-flex items-center">

                    <a href="<?= $crumb[1] ?> <?= $crumb[0] ?>" class="text-gray-600 hover:text-blue-500">

                    </a>


                </li>

            <?php endforeach ?>
        <?php endif ?>

        <!-- <li class="inline-flex items-center">
            <a href="#" class="text-gray-600 hover:text-blue-500">
                Page 1
            </a> -->

        <!-- <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
            </svg> -->
        <!-- </li> -->


    </ul>
</div>