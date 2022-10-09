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
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="#" class="flex items-center">
              <img src="/docs/images/logo.svg" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo" />
              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
           pzzz
          </button>
          <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
              <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   <nav class="border-b border-gray-500 ">

     <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-2 py-1">
         <ul class="flex  items-center font-medium">
             <li>
                 <a href="<?php echo e(route('movies.index')); ?>" class="flex flex-row">
                     <img class="w-12  rounded-full" src="/img/logo.png">
                     <div class="py-6 text-sky-500 text-xl">Movie App</div>
                 </a>
             </li>
             <li class="ml-14">
                <a href="<?php echo e(route("movies.index")); ?>" class=" hover:text-sky-400">Movies</a>
            </li>
            <li class="ml-6">
                <a href="<?php echo e(route("tv.index")); ?>" class="hover:text-sky-400">TV Shows</a>
            </li>
            <li class="ml-6">
                <a href="<?php echo e(route("actors.index")); ?>" class="hover:text-sky-400">Actors</a>
            </li>
         </ul>
         <div  class="flex items-center">
             <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-dropdown', [])->html();
} elseif ($_instance->childHasBeenRendered('PWw1SBh')) {
    $componentId = $_instance->getRenderedChildComponentId('PWw1SBh');
    $componentTag = $_instance->getRenderedChildComponentTagName('PWw1SBh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PWw1SBh');
} else {
    $response = \Livewire\Livewire::mount('search-dropdown', []);
    $html = $response->html();
    $_instance->logRenderedChild('PWw1SBh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <div class="ml-4">
                <a href="#">
                    <img src="/img/logo.png" class="rounded-full w-8">
                </a>
            </div>
        </div>
     </div>

   </nav>
   <?php echo $__env->yieldContent('content'); ?>
   <?php echo \Livewire\Livewire::scripts(); ?>

   <?php echo $__env->yieldContent('scripts'); ?>
   <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Hajar\movies-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>