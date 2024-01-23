<?php


Route::get('/', function () {
    $dati=[
            "movie"=>[
            "joker",
            "fliston",
            "sragonball",
            "pokemon",
            "richie richie",
            "came back to te future",

        ],
    ];

    return view('welcome');
});

Route::get('film', function () {
    $dati=[
        "movies"=>[
            "joker",
            "fliston",
            "sragonball",
            "pokemon",
            "richie richie",
            "came back to te future",

        ],
    ];

    return view('film',$dati);
});

