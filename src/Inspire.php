<?php

namespace Jch\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('www.themealdb.com/api/json/v1/1/search.php?s=Arrabiata');

        return $response;
    }
}