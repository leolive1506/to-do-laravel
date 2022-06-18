<?php

namespace App\Http\Controllers\Pages;

use App\Domains\Storage\Service\StorageService;
use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $rules = [
        'name' => ['required', 'max:140'],
        'description' => ['nullable'],
        'file' => ['nullable'],
        'remember_at' => ['nullable', 'date'],
        'cost' => ['nullable', 'string'],
    ];

    private $search;
    private $redirectIndex = 'tarefas.index';
    private $baseView = 'pages.todo';

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

        return view($this->baseView . '.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->baseView . '.form');
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

        $data = $request->all();
        if (!empty($data['file'])) {
            $data['file_extension'] = getFileExtension($data['file']);
            $data['file'] = $data['file']->store('todos');
        }

        if (!empty($data['cost'])) {
            $data['cost'] = getOnlyNumbersDecimal($data['cost']);
        }

        Todo::create($data);
        flashMessage('Salvo com sucesso');
        return redirectTo($this->redirectIndex);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        return view($this->baseView . '.show', compact('todo'));
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
        return view($this->baseView . '.form', compact('todo'));
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
        $data = $request->all();
        $todo = Todo::findOrFail($id);

        if (!empty($todo->file) && !empty($data['file'])) {
            StorageService::deleteFileStorage($todo->file);
            $data['file_extension'] = getFileExtension($data['file']);
            $data['file'] = $data['file']->store('todos');
        }

        if (!empty($data['cost'])) {
            $data['cost'] = getOnlyNumbersDecimal($data['cost']);
        }

        $todo->update($data);
        flashMessage('Atualizado com sucesso');
        return redirectTo($this->redirectIndex);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        if (!empty($todo->file)) {
            StorageService::deleteFileStorage($todo->file);
        }

        Todo::destroy($id);
        flashMessage('Deletado com sucesso');
        return redirectTo($this->redirectIndex);
    }

    public function checkbox(Request $request, $id)
    {
        $redirect = 'tarefas.index';

        Todo::where('id', $id)->update([
            'completed' => !empty($request['completed'])
        ]);

        flashMessage('Atualizado com sucesso');
        return redirectTo($redirect);
    }
}
