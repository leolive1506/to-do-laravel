<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TodoController extends Controller
{
    private $rules = [
        'name' => ['required', 'max:140'],
        'description' => ['nullable'],
        'file' => ['nullable'],
    ];

    private $search;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->get('search');

        $todos = Todo::when($this->search, function ($query) {
            $query->where('name', 'like', "%{$this->search}%");
        })->orderBy('id', 'desc')->paginate(20);

        return view('pages.todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.todo.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);

        $inputs = $request->all();
        if (!empty($inputs['file'])) {
            $inputs['file'] = $inputs['file']->store('todos');
        }

        Todo::create($inputs);
        $this->flashMessage('Salvo com sucesso');
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('pages.todo.form', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules);
        $todo = Todo::findOrFail($id);

        $todo->update($request->all());
        $this->flashMessage('Atualizado com sucesso');
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);
        $this->flashMessage('Deletado com sucesso');
        return redirect()->route('tarefas.index');
    }

    public function checkbox(Request $request, $id)
    {
        Todo::where('id', $id)->update([
            'completed' => !empty($request['completed'])
        ]);
        $this->flashMessage('Atualizado com sucesso');
        return redirect()->route('tarefas.index');
    }

    protected function flashMessage($text, $name = 'status')
    {
        request()->session()->flash($name, $text);
    }
}
