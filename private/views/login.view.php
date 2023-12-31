<?php $this->view('includes/header') ?>


<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">


        <form action="" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
            <div class="flex flex-col items-center bg-white ">
                <img src="../public/sc.png" class="w-16 -mt-14 bg-white" alt="" />
            </div>
            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                Sign in to your account
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
            <div>
                <label for="email" class="sr-only">Email</label>

                <div class="relative">
                    <input type="email" value="<?= get_var('email') ?>" name="email"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter email"
                        required />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="password" class="sr-only">Password</label>

                <div class="relative">
                    <input type="password" name="password"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter password" required />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
            </div>

            <button type="submit"
                class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                Sign in
            </button>

            <!-- <p class="text-center text-sm text-gray-500">
                No account?
                <a class="underline" href="">Sign up</a>
            </p> -->
        </form>
    </div>
</div>

<?php $this->view('includes/footer') ?>