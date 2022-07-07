<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class MovieApi
{
  public function getMovieList(array $params = []): Response
  {
    return Http::withoutVerifying()
      ->get(config('movie_api.url') . '/movie?', array_merge([
        'api_key' => config('movie_api.key')
      ], $params));
  }
}
