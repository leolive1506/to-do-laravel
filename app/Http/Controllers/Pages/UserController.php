<?php

namespace App\Http\Controllers\Pages;

use App\Domains\Storage\Service\StorageService;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    private $rules = [
        'name' => ['required', 'max:140'],
        'email' => ['required', 'max:140'],
        'password' => ['nullable', 'confirmed'],
        'photo' => ['nullable'],
        // 'profile_id' => ['required', 'max:140'],
        'birthday' => ['required', 'date'],
        'gender' => ['required', 'max:1'],
    ];

    private $search;
    private $redirectIndex = 'profile';
    private $baseView = 'pages.user';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->get('search');

        $users = User::when($this->search, function ($query) {
            $query->where('name', 'like', "%{$this->search}%");
        })->orderBy('id', 'desc')->paginate(20);

        return view($this->baseView . '.index', compact('users'));
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

        $inputs = $request->all();
        if (!empty($inputs['photo'])) {
            $inputs['photo'] = $inputs['photo']->store('avatar');
        }

        if (!empty($inputs['password'])) {
            $inputs['password'] = $this->encryptPassword($inputs['password']);
        }

        User::create($inputs);
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
        $user = User::findOrFail($id);
        return view($this->baseView . '.form', compact('user'));
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
        $inputs = $request->all();
        $user = User::findOrFail($id);

        if (!empty($user->photo) && !empty($inputs['photo'])) {
            StorageService::deleteFileStorage($user->photo);
            $inputs['photo'] = $inputs['photo']->store('avatar');
        }

        if (!empty($inputs['password'])) {
            $inputs['password'] = $this->encryptPassword($inputs['password']);
        } else {
            unset($inputs['password']);
        }

        $user->update($inputs);
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
        $user = User::findOrFail($id);
        if (!empty($user->photo)) {
            StorageService::deleteFileStorage($user->photo);
        }

        User::destroy($id);
        flashMessage('Deletado com sucesso');
        return redirectTo($this->redirectIndex);
    }

    public function profileUser()
    {
        $user = Auth::user();
        return view($this->baseView . '.form', compact('user'));
    }

    private function encryptPassword($password)
    {
        return Hash::make($password);
    }
}
