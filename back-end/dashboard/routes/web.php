<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');

    $array = 
        [    
        ['name' => 'Marcio Leite',
        'email' => 'mblvendas@hotmail.com',
        'username' => 'Disbiriflix',
        ],
        ['name' => 'Gabriel Leite',
        'email' => 'bribru@gmail.com',
        'username' => 'Gigante',
        ],
        ['name' => 'Mariana Leite',
        'email' => 'maryberry@gmail.com',
        'username' => 'Mary',
        ],
        ['name' => 'Marcio Leite',
        'email' => 'mblvendas@hotmail.com',
        'username' => 'Disbiriflix',
        ],
        ['name' => 'Gabriel Leite',
        'email' => 'bribru@gmail.com',
        'username' => 'Gigante',
        ],
        ['name' => 'Mariana Leite',
        'email' => 'maryberry@gmail.com',
        'username' => 'Mary',
        ],
        ['name' => 'Marcio Leite',
        'email' => 'mblvendas@hotmail.com',
        'username' => 'Disbiriflix',
        ],
        ['name' => 'Gabriel Leite',
        'email' => 'bribru@gmail.com',
        'username' => 'Gigante',
        ],
        ['name' => 'Mariana Leite',
        'email' => 'maryberry@gmail.com',
        'username' => 'Mary',
        ],
        ['name' => 'Marcio Leite',
        'email' => 'mblvendas@hotmail.com',
        'username' => 'Disbiriflix',
        ],
        ['name' => 'Gabriel Leite',
        'email' => 'bribru@gmail.com',
        'username' => 'Gigante',
        ],
        ['name' => 'Mariana Leite',
        'email' => 'maryberry@gmail.com',
        'username' => 'Mary',
        ],
        ['name' => 'Marcio Leite',
        'email' => 'mblvendas@hotmail.com',
        'username' => 'Disbiriflix',
        ],
        ['name' => 'Gabriel Leite',
        'email' => 'bribru@gmail.com',
        'username' => 'Gigante',
        ],
        ['name' => 'Mariana Leite',
        'email' => 'maryberry@gmail.com',
        'username' => 'Mary',
        ],
        ];
                 
    return response()->json( "opa" , 200 );
});