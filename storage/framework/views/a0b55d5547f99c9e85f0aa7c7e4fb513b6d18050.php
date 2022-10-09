<?php $__env->startSection('content'); ?>
    <div>
        <div class=" movie-info border border-gray-800 px-10">
            <div class="container mx-auto px-4 py-16 flex">

                    <img src="<?php echo e($movie['poster_path']); ?>" style="width:26rem">

                <div class="ml-24">
                    <h2 class="text-4xl font-semibold"><?php echo e($movie['title']); ?></h2>
                    <div class=" flex items-center text-md  mt-3">
                        <svg class="fill-current text-orange-500 w-6" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
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
                        <?php if(count($movie['videos']['results']) > 0 ): ?>
                            <div class="mt-12 ">

                                <button
                                    @click=" isOpen = true"
                                    href="https://youtube.com/watch?v=<?php echo e($movie['videos']['results'][0]['key']); ?>"
                                    class=" inline-flex items-center bg-sky-400 text-gray-800 rounded font-semibold px-7 py-4 hover:bg-violet-400">
                                    <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                    <span class="ml-2">Play Trailer</span>
                                </button>

                            </div>



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
                        <?php endif; ?>
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
                                <a href="<?php echo e(route('actors.show',$cast['id'])); ?>">

                                    <?php if($cast['profile_path']): ?>
                                        <img src="https://image.tmdb.org/t/p/w500/<?php echo e($cast['profile_path']); ?>"
                                            class="hover:opacity-75">
                                    <?php else: ?>
                                        <img src="https://via.placeholder.com/500x750" class="hover:opacity-75">
                                    <?php endif; ?>

                                </a>
                                <div class="mt-2">

                                    <p class="text-md ">
                                        <a href="<?php echo e(route('actors.show',$cast['id'])); ?>">
                                           <?php echo e($cast['name']); ?>

                                        </a>
                                    </p>
                                    <p class="text-xl font-semibold"><?php echo e($cast['character']); ?></p>


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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hajar\movies-app\resources\views/movies/show.blade.php ENDPATH**/ ?>