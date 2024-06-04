<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/api', function (Request $request) {

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
                 
    return response()->json( $array , 200 );

    // return $request->user();
});