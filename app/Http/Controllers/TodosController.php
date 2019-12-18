<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
      $todos = Todo::all();
      return view('todos.index')-> with('todos', Todo::all());
    }


  public function show($todoId)
  {
    //(var_dump($todoId));

    //$todo = Todo::find($todoId);

    return view('todos.show')->with('todo', Todo::find($todoId));

  }

  public function create()
  {

    return view('todos.create');

  }

  public function store()
    {

      $this->validate(request(),[
      
      'name' => 'required|min:3|max:25',

      'description' => 'required|min:15|max:200'

    ]);




    $data = request()->all();

    $todo = new Todo();
    
<<<<<<< HEAD
    $todo->name = $data['name'];

    $todo->description = $data['description'];
    
    $todo->completed = false;
    
    $todo->save();
=======
    'name' => 'required|min:3|max:25',

    'description' => 'required|min:15|max:200'
>>>>>>> e47a2dc3b17d4df9ad45ab8c7f183afcc2c31dc1

    return redirect('/todos');


  }

  public function edit($todoId)
    {

      $todo = Todo::find($todoId);

      return view('todos.edit')->with('todo', $todo);

    }


      public function update($todoId)
    {

      $this->validate(request(),[
      
      'name' => 'required|min:3|max:25',

      'description' => 'required|min:15|max:200'
    ]);


        $data = request()->all();


        $todo = Todo::find($todoId);

        $todo->name = $data['name'];

        $todo->description = $data['description'];
    
        $todo->save();

        return view('todos.show')->with('todo', $todo);

  }

  public function delete($todoId)
  {
    $todo = Todo::find($todoId);

    $todo->delete();


    return redirect('/todos');
  }


}
