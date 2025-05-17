<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('users.index', [
            'users' => User::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::create($request->all());
        $group = app(GroupService::class)->create($data, $request->file('image'));
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->only(['name_eng', 'name_ur','father_name_eng', 'father_name_ur']));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
