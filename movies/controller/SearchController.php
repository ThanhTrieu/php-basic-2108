<?php
// tat ca deu chay qua file index.php
require 'services/curl_api.php';

function index()
{
    // lay ten bo phim ma tu giao dien tiem kiem gui len
    $nameMovie = trim($_POST['movie'] ?? '');
    $nameMovie = strip_tags($nameMovie);

    $dataMovies = searchMoviesByKeyword($nameMovie);
    $movies  = $dataMovies['results'] ?? [];
    $pathImg = 'https://image.tmdb.org/t/p/w300'; // duong link anh
    loadView('list_movies_view');
}

function loadView($filename)
{
    require 'view/'.$filename.'.php';
}

index();