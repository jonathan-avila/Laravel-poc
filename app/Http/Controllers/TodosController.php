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


}
