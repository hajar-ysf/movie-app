<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Carbon;
class MoviesViewModel extends ViewModel
{   public $topRatedMovies;
    public $popularMovies;
    public $genres;
    public $nowPlayingMovies;

    public function __construct($topRatedMovies,$popularMovies,$genres,$nowPlayingMovies,$upComingMovies)
    {
       $this->topRatedMovies = $topRatedMovies;
       $this->popularMovies = $popularMovies;
       $this->genres = $genres;
       $this->nowPlayingMovies = $nowPlayingMovies;
       $this->upComingMovies = $upComingMovies;
    }


    public function popularMovies(){

        return $this->formatMovies($this->popularMovies);
    }

    public function nowPlayingMovies(){

        return $this->formatMovies($this->nowPlayingMovies);
    }

    public function topRatedMovies(){

        return $this->formatMovies($this->topRatedMovies);
    }

    public function upComingMovies(){

        return $this->formatMovies($this->upComingMovies);
    }

    public function genres(){

       return collect($this->genres)->mapWithKeys(function ($genre){
                return [$genre['id']=> $genre['name']];
        });
    }

    private function formatMovies($movies){


        return collect($movies)->map(function($movie){

            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function ($value){
                return [$value => $this->genres()->get($value)];
            })->implode(', ');


            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
                'vote_average' => $movie['vote_average']*10 . '%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d , Y'),
                'genres' => $genresFormatted,
            ])->only(['poster_path' , 'id','genre_ids','title','vote_average','overview','release_date','genres',]);

        });
    }
}
