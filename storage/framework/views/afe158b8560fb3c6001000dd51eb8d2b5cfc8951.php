<?php $__env->startSection('content'); ?>
    <div>
        <div class=" movie-info border border-gray-800 px-10">
            <div class="container mx-auto px-4 py-16 flex">
                <img src="<?php echo e($movie['poster_path']); ?>" style="width:26rem">
                <div class="ml-24">
                    <h2 class="text-4xl font-semibold"><?php echo e($movie['original_title']); ?></h2>
                    <div class=" flex items-center text-md  mt-3">
                        <span><img class=" w-8" src="https://img.icons8.com/emoji/2x/star-emoji.png"></span>
                        <span class="ml-2"><?php echo e($movie['vote_average']); ?></span>
                        <span class="ml-2">|</span>
                        <span
                            class="ml-2"><?php echo e($movie['release_date']); ?></span>
                        <span class="ml-2">|</span>
                        <span class="text-gray-300 text-md ml-2">
                            <?php echo e($movie['genres']); ?>

                        </span>
                    </div>
                    <p class="break-words whitespace-normal text-md  mt-6">
                        <?php echo e($movie['overview']); ?>

                    </p>


                    <div class="mt-12">
                        <h4 class="text-white text-lg font-bold">Featured Cast</h4>

                        <div class="flex mt-4">

                            <?php $__currentLoopData = $movie['crew']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="mr-8">
                                        <div> <?php echo e($crew['name']); ?></div>
                                        <div class="text-md text-gray-400"> <?php echo e($crew['job']); ?></div>
                                    </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div x-data="{ isOpen: false }"

                    >
                        <?php if(count($movie['videos']['results']) > 0): ?>
                            <div class="mt-12 ">
                                <button
                                    @click  = " isOpen = true "
                                    href="https://youtube.com/watch?v=<?php echo e($movie['videos']['results'][0]['key']); ?>"

                                    class=" inline-flex items-center bg-sky-400 text-gray-800 rounded font-semibold px-7
                                         py-4 hover:bg-violet-400"
                                >
                                    <img src="/img/play.png" class="w-8 mr-3">
                                    Play Trailer
                                </button>
                            </div>
                        <?php endif; ?>

                        <div style="background-color: rgba(39, 38, 37, 0.856)"
                            class="flex top-0 left-0 w-full h-full fixed items-center shadow-lg overflow-auto"
                            x-show=" isOpen "
                            >

                            <div class="container mx-auto lg:px-32 rounded-lg overflow-auto">

                                <div class="bg-gray-700 rounded">
                                    <div class="flex justify-end pr-4 pt-2">

                                        <button @click  = " isOpen = false " class="text-3xl leading-none hover:text-orange-500">&times</button>

                                    </div>

                                    <div class="modal-body  px-12 py-12 ">
                                        <div class="responsive-container overflow-hidden relative"
                                            style="padding-top:56.25%">

                                            <iframe width="560" height="315"
                                                class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                src="https://www.youtube.com/embed/<?php echo e($movie['videos']['results'][0]['key']); ?>"
                                                style="border:0;" allow="autoplay; encrypted-media" allowfullscreen>
                                            </iframe>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="movie-cast border-b border-gray-800 px-10">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Cast</h2>

                <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                    <?php $__currentLoopData = $movie['cast']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="mt-8">
                                <a href="https://fr.wikipedia.org/wiki/<?php echo e($cast['name']); ?>" target="_blank">


                                    <?php if($cast['profile_path']): ?>
                                        <img src="https://image.tmdb.org/t/p/w500/<?php echo e($cast['profile_path']); ?>"
                                            class="hover:opacity-75">
                                    <?php else: ?>
                                        <img src="https://via.placeholder.com/500x750" class="hover:opacity-75">
                                    <?php endif; ?>

                                </a>
                                <div class="mt-2">
                                    <p class="text-xl font-semibold"><?php echo e($cast['name']); ?></p>
                                    <p class="text-md "><?php echo e($cast['character']); ?></p>


                                </div>
                            </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>
        </div>

        <div class="movie-images border-b border-gray-800px-10" x-data="{ isOpen: false, image:''}">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Images</h2>

                <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <?php $__currentLoopData = $movie['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="mt-8">
                                <a
                                @click.prevent=" isOpen = true
                                image='https://image.tmdb.org/t/p/original/<?php echo e($image['file_path']); ?>' "
                                href="#">
                                   <img src="https://image.tmdb.org/t/p/w500/<?php echo e($image['file_path']); ?>"
                                    class="hover:opacity-75">
                                </a>
                            </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div style="background-color: rgba(39, 38, 37, 0.856)"
                            class="flex top-0 left-0 w-full h-full fixed items-center shadow-lg overflow-auto"
                            x-show=" isOpen "
                            >

                            <div class="container mx-auto lg:px-32 rounded-lg overflow-auto">

                                <div class="bg-gray-700 rounded">
                                    <div class="flex justify-end pr-4 pt-2">

                                        <button
                                        @click  = " isOpen = false "
                                        @keydown.escape.window= " isOpen = false "
                                        class="text-3xl leading-none hover:text-orange-500">&times</button>

                                    </div>

                                    <div class="modal-body  px-12 py-12 ">
                                        <img :src="image">
                                    </div>

                                </div>

                            </div>

                        </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hajar\movies-app\resources\views/show.blade.php ENDPATH**/ ?>