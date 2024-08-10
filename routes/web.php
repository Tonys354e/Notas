    <?php

    use Illuminate\Support\Facades\Route;



    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //rutas notas
    Route::get('/Notas', [App\Http\Controllers\TaskController::class, 'index']);

    Route::get('/Notas/create', [App\Http\Controllers\TaskController::class, 'create']);
    Route::post('/Notas', [App\Http\Controllers\TaskController::class, 'sendData']); 
    Route::get('/Notas/{id}/edit', [App\Http\Controllers\TaskController::class, 'edit']); // Asegúrate de que esta ruta use el ID
    Route::put('/Notas/{id}', [App\Http\Controllers\TaskController::class, 'update']); // Ruta para actualizar la tarea
    Route::delete('/Notas/{id}', [App\Http\Controllers\TaskController::class, 'destroy']); // Ruta para eliminar la tarea (opcional)   
    