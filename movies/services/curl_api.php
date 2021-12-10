<?php

function searchMoviesByKeyword($keyword = '')
{
    $urlApi = "https://api.themoviedb.org/3/search/movie?query={$keyword}&api_key=cfe422613b250f702980a3bbf9e90716&page=1";

    // su dung CURL de lay data tu api ve
    // create a new cURL resource
    $ch = curl_init();
    // config params
    curl_setopt($ch, CURLOPT_URL, $urlApi); // connect vao url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // doi thuc thi curl api moi lay du lieu ve
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // The maximum number of seconds to allow cURL functions to execute.

    // thuc thi
    $data = curl_exec($ch);
    // close
    curl_close($ch);

    // xu ly data
    $arrMovies = json_decode($data, true); // chuyen tu chuoi json ve array trong php
    return $arrMovies;
}
