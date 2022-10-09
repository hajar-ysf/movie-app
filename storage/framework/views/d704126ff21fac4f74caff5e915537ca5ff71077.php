<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

    <!--  Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!--  Swiper's CSS -->

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>

    <title>Movie Happ</title>

    <?php echo \Livewire\Livewire::styles(); ?>


</head>
<body class="font-san text-white bg-black">

   <nav class="bg-gradient-to-b from-black to-stone-800">

     <div class="container mx-auto flex flex-col sm:flex-row items-center justify-between px-2 py-1">
         <ul class="flex  items-center font-medium">
             <li>
                 <a href="<?php echo e(route('movies.index')); ?>" class="flex flex-row">

                     <div class="py-5 text-red-600 text-md sm:text-4xl "> <img class="inline w-10 h-10 md:w-12  " src="/img/logo3.png">OVIES </div>
                 </a>
             </li>
             <li class="ml-14">
                <a href="<?php echo e(route("movies.index")); ?>" class="text-xs md:text-lg hover:text-sky-400">Movies</a>
            </li>
            <li class="ml-6">
                <a href="<?php echo e(route("tv.index")); ?>" class="text-xs md:text-lg hover:text-sky-400">TV Shows</a>
            </li>
            <li class="ml-6">
                <a href="<?php echo e(route("actors.index")); ?>" class="text-xs md:text-lg hover:text-sky-400">Actors</a>
            </li>
         </ul>
         <div  class="flex items-center">
             <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-dropdown', [])->html();
} elseif ($_instance->childHasBeenRendered('snZWMv9')) {
    $componentId = $_instance->getRenderedChildComponentId('snZWMv9');
    $componentTag = $_instance->getRenderedChildComponentTagName('snZWMv9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('snZWMv9');
} else {
    $response = \Livewire\Livewire::mount('search-dropdown', []);
    $html = $response->html();
    $_instance->logRenderedChild('snZWMv9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>
     </div>

   </nav>
   <?php echo $__env->yieldContent('content'); ?>
   <?php echo \Livewire\Livewire::scripts(); ?>

   <?php echo $__env->yieldContent('scripts'); ?>
   <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>
</html>
<?php /**PATH C:\Users\admin\movies-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>