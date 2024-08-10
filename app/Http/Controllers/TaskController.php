<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::all();
        return view('Notas.index', compact('tasks'));
    }

    public function create()
    {
        return view('Notas.create');
    }

    public function sendData(Request $request)
    {
        $rules = [
            'titulo' => 'required|min:3',
            'contenido' => 'required',
        ];

        $messages = [
            'titulo.required' => 'El nombre de la tarea es obligatorio.',
            'titulo.min' => 'El nombre de la tarea debe tener al menos 3 caracteres.',
            'contenido.required' => 'El contenido de la tarea es obligatorio.',
        ];

        $this->validate($request, $rules, $messages);

        $task = new Task();
        $task->titulo = $request->input('titulo');
        $task->contenido = $request->input('contenido');
        $task->save();

        return redirect('/Notas');
    }

    public function edit($id)
{
    $task = Task::findOrFail($id);
    return view('Notas.edit', compact('task'));
}


    public function update(Request $request, $id)
    {
        $rules = [
            'titulo' => 'required|min:3',
            'contenido' => 'required',
        ];

        $messages = [
            'titulo.required' => 'El nombre de la tarea es obligatorio.',
            'titulo.min' => 'El nombre de la tarea debe tener al menos 3 caracteres.',
            'contenido.required' => 'El contenido de la tarea es obligatorio.',
        ];

        $this->validate($request, $rules, $messages);

        $task = Task::findOrFail($id);
        $task->titulo = $request->input('titulo');
        $task->contenido = $request->input('contenido');
        $task->save();

        return redirect('/Notas');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/Notas');
    }
}
