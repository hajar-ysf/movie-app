<?php $__env->startSection('content'); ?>


<div class=" movie-info border border-gray-800 px-10">
    <div class="container mx-auto px-4 py-16 flex">

            <img src="<?php echo e($tvshow['poster_path']); ?>" style="width:26rem">

        <div class="ml-24">
            <h2 class="text-4xl font-semibold"><?php echo e($tvshow['name']); ?></h2>
            <div class=" flex items-center text-md  mt-3">
                <svg class="fill-current text-orange-500 w-6" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                <span class="ml-1"><?php echo e($tvshow['vote_average']); ?></span>
                <span class="mx-2">|</span>
                <span><?php echo e($tvshow['first_air_date']); ?></span>
                <span class="mx-2">|</span>
                <span><?php echo e($tvshow['genres']); ?></span>
            </div>
            <p class="break-words whitespace-normal text-md  mt-6">
                <?php echo e($tvshow['overview']); ?>

            </p>


            <div class="mt-12">
                <h4 class="text-white text-lg font-bold">Featured Cast</h4>

                <div class="flex mt-4">

                    <?php $__currentLoopData = $tvshow['created_by']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mr-8">
                            <div><?php echo e($crew['name']); ?></div>
                            <div class="text-sm text-gray-400">Creator</div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

            <div x-data="{ isOpen: false }">
                <?php if(count($tvshow['videos']['results']) > 0): ?>
                    <div class="mt-12 ">
                        <button
                            @click="isOpen = true"
                            class=" inline-flex items-center bg-sky-400 text-gray-800 rounded font-semibold px-7 py-4 hover:bg-violet-400">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>

                    <template x-if="isOpen">
                        <div
                            style="background-color: rgba(0, 0, 0, .5);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                        >
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button
                                            @click="isOpen = false"
                                            @keydown.escape.window="isOpen = false"
                                            class="text-3xl leading-none hover:text-gray-300">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                            <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/<?php echo e($tvshow['videos']['results'][0]['key']); ?>" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<div class="tv-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <?php $__currentLoopData = $tvshow['cast']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-8">
                    <a href="<?php echo e(route('actors.show', $cast['id'])); ?>">
                        <img src="<?php echo e($cast['profile_path']); ?>" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="<?php echo e(route('actors.show', $cast['id'])); ?>" class="text-lg mt-2 hover:text-gray:300"><?php echo e($cast['name']); ?></a>
                        <div class="text-sm text-gray-400">
                            <?php echo e($cast['character']); ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> <!-- end tv-cast -->

<div class="tv-images" x-data="{ isOpen: false, image: ''}">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $tvshow['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-8">
                    <a
                        @click.prevent="
                            isOpen = true
                            image='<?php echo e('https://image.tmdb.org/t/p/original/'.$image['file_path']); ?>'
                        "
                        href="#"
                    >
                        <img src="<?php echo e('https://image.tmdb.org/t/p/w500/'.$image['file_path']); ?>" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div
            style="background-color: rgba(0, 0, 0, .5);"
            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
            x-show="isOpen"
        >
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                <div class="bg-gray-900 rounded">
                    <div class="flex justify-end pr-4 pt-2">
                        <button
                            @click="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="text-3xl leading-none hover:text-gray-300">&times;
                        </button>
                    </div>
                    <div class="modal-body px-8 py-8">
                        <img :src="image" alt="poster">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end tv-images -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hajar\movies-app\resources\views/tv/show.blade.php ENDPATH**/ ?>