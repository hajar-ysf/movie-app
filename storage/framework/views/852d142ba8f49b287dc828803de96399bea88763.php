<?php $__env->startSection('content'); ?>
    <div class="popular-movies mx-4 ">

            <h1 class="text-sky-500 text-xl font-semibold pb-1 pt-7">Popular Movies</h1>

            <div class="swiper overflow-hidden md:overflow-hidden relative">
                <div class="swiper-wrapper">

                    <?php $__currentLoopData = $popularMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <?php if (isset($component)) { $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MovieCard::class, ['movie' => $movie] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('movie-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MovieCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c)): ?>
<?php $component = $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c; ?>
<?php unset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="swiper-button-prev" style="font-size: 5px"></div>
                <div class="swiper-button-next"></div>

            </div>

    </div>

    <div class="now-playing mx-4">

        <h1 class="text-sky-500 text-xl font-semibold pb-1 pt-7">Now Playing</h1>

        <div class="swiper overflow-hidden md:overflow-hidden relative">
            <div class="swiper-wrapper">

                <?php $__currentLoopData = $nowPlayingMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $now): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <?php if (isset($component)) { $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MovieCard::class, ['movie' => $now] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('movie-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MovieCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c)): ?>
<?php $component = $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c; ?>
<?php unset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c); ?>
<?php endif; ?>
                        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="swiper-button-prev" style="font-size: 5px"></div>
            <div class="swiper-button-next"></div>

        </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>


        const swiper = new Swiper('.swiper', {
            // Default parameters
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 8
                },
                420: {
                    slidesPerView: 3,
                    spaceBetween: 8
                },
                540: {
                    slidesPerView: 4,
                    spaceBetween: 8
                },
                740: {
                    slidesPerView: 5,
                    spaceBetween: 8
                },

                1200: {
                    slidesPerView: 6,
                    spaceBetween: 10
                },
                1220: {
                    slidesPerView: 8,
                    spaceBetween: 8
                }

            }
        })
    </script>

    <script>
        /* var swiper = new Swiper('.swiper', {
                slidesPerView: 5,
                spaceBetween: 16,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });*/
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hajar\movies-app\resources\views/movies/index.blade.php ENDPATH**/ ?>