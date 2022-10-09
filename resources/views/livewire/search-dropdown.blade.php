
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

        @if (strlen($search)>= 2)
            <div class="absolute bg-gray-800 rounded my-4 w-64 z-40" x-show="isOpen" >
                @if($searchResults->count()>0)
                    <ul>
                        @foreach ( $searchResults as $result )

                        <li class="flex items-center border-b border-gray-700 hover:bg-orange-500 ">
                            <a href="{{route( 'movies.show' , $result['id'])}}" class="  px-3 py-3 flex items-center"

                            @if ($loop->last)  @keydown.tab= " isOpen= false" @endif >
                                @if ($result['poster_path'])
                                     <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" class="w-8 mr-4">
                                @else
                                     <img src="https://via.placeholder.com/50x75" class="w-8 mr-4">
                                @endif



                                <span>{{ $result['title'] }}</span>
                            </a>
                        </li>



                        @endforeach
                    </ul>
                @else
                    <ul>
                            <li class="flex items-center border-b border-gray-700 px-3 py-3">
                                No results for {{ $search}}
                            </li>
                    </ul>
                @endif
            </div>
        @endif


</div>

