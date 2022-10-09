<?php $__env->startSection('content'); ?>
<div class="bg-stone-800">
    <div class="container mx-auto px-4 py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-3  sm:grid-cols-5">

                <?php $__currentLoopData = $popularActors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="actor mt-8 mx-3">
                        <a href="<?php echo e(route('actors.show', $actor['id'])); ?>">
                            <img src="<?php echo e($actor['profile_path']); ?>" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="<?php echo e(route('actors.show', $actor['id'])); ?>" class="text-xs sm:text-md lg:text-xl hover:text-gray-300"><?php echo e($actor['name']); ?></a>
                            <div class="text-xs sm:text-md lg:text-lg font-semibold truncate text-gray-400"><?php echo e($actor['known_for']); ?></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-16 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last my-8">End of content</p>
            <p class="infinite-scroll-error">Error</p>
        </div>


    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
      path: '/actors/page/{{#}}',
      append: '.actor',
      status: '.page-load-status',

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\movies-app\resources\views/actors/index.blade.php ENDPATH**/ ?>