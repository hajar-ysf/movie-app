
<div class="relative mx-auto lg:mr-8" x-data="{ isOpen: true }" @click.away=" isOpen = false ">

        <input wire:model.debounce.200ms="search" type="text"
        class=" text-black  pl-10 rounded-full  w-56 lg:w-64 px-4 py-1 focus:outline-none focus:shadow-outline"
        placeholder="Search"
        x-ref="search"
        @keydown.window="
          if(event.keyCode == 191){
              event.preventDefault();
              $refs.search.focus();
          }
        "
        @focus= " isOpen = true "
        @keydown.escape.window=" isOpen= false"
        @keydown.shift.tab=" isOpen= false"
        >

        <div class="absolute top-0">
            <img src="/img/search.png" class="w-6 py-1 mx-2 ">
        </div>

        <div wire:loading class="spinner text-black top-0 right-0 mr-4 mt-4"></div>

        <?php if(strlen($search)>= 2): ?>
            <div class="absolute bg-gray-800 rounded my-4 w-64 z-40" x-show="isOpen" >
                <?php if($searchResults->count()>0): ?>
                    <ul>
                        <?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li class="flex items-center border-b border-gray-700 hover:bg-orange-500 ">
                            <a href="<?php echo e(route( 'movies.show' , $result['id'])); ?>" class="  px-3 py-3 flex items-center"

                            <?php if($loop->last): ?>  @keydown.tab= " isOpen= false" <?php endif; ?> >
                                <?php if($result['poster_path']): ?>
                                     <img src="https://image.tmdb.org/t/p/w92/<?php echo e($result['poster_path']); ?>" class="w-8 mr-4">
                                <?php else: ?>
                                     <img src="https://via.placeholder.com/50x75" class="w-8 mr-4">
                                <?php endif; ?>



                                <span><?php echo e($result['title']); ?></span>
                            </a>
                        </li>



                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <ul>
                            <li class="flex items-center border-b border-gray-700 px-3 py-3">
                                No results for <?php echo e($search); ?>

                            </li>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>


</div>

<?php /**PATH C:\Users\admin\movies-app\resources\views/livewire/search-dropdown.blade.php ENDPATH**/ ?>