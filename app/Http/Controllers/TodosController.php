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


  public function show(Todo $todo)
  {
 

    return view('todos.show')->with('todo', $todo);

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
    
    $todo->name = $data['name'];

    $todo->description = $data['description'];
    
    $todo->completed = false;
    
    $todo->save();

    return redirect('/todos');


  }

  public function edit(Todo $todo)
    {

      

      return view('todos.edit')->with('todo', $todo);

    }


      public function update(Todo $todo)
    {

      $this->validate(request(),[
      
      'name' => 'required|min:3|max:25',

      'description' => 'required|min:15|max:200'
    ]);


        $data = request()->all();


        $todo->name = $data['name'];

        $todo->description = $data['description'];
    
        $todo->save();

        return view('todos.show')->with('todo', $todo);

  }

  public function delete(Todo $todo)
  {

    $todo->delete();


    return redirect('/todos');
  }


}
