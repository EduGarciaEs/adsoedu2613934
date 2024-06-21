<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tenis/list',function(){
    $tenis=App\Models\Tenis::all();
    //echo var_dump($tenis);
    dd($tenis->toArray());
});

Route::get('/tenis/{id}',function($id){
    $tenis=App\Models\Tenis::find($id);
    //echo var_dump($tenis);
    dd($tenis->toArray());
});

Route::get('/tenis/show/{id}',function($id){
    $id=request(id);
    $tenis=App\Models\Tenis::find($id);
    //echo var_dump($tenis);
    dd($tenis->toArray());
});

Route::get('/tenis',function(){
    $tenis=App\Models\Tenis::all();
    //echo var_dump($tenis);
    return view('listtenis')->with('tenis',$tenis);
});



Route::get('/tenis/user/create',function(){
    $user=\App\Models\User::get()->take(20);
    echo "<table><tr>
                 <th>ID</th>
                 <th>Fullname</th>
                 <th>Age</th>
                 <th>Birthdate</th>
            </tr></br>";
    foreach ($user as $use) {
        $carbonated_date =Carbon::parse($use[birthdate])->age;
        echo "
        <tr>
                 <td>" . $use->id . "</td>
                 <td>" . $use->fullname . "</td>
                 <td>" . $carbonated_date . " years old</td>
                 <td>" . $use->created_at->diffForHumans() . "</td>
                 
      
            </tr></br>
            </table>
            ";

    }
});





