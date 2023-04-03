<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    /**
     * Display list of users
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param StoreUserRequest $request
     * @return RedirectResponse|Redirector|Application
     */
    public function store(StoreUserRequest $request): Application|RedirectResponse|Redirector
    {
        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the user.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update user.
     *
     * @param UpdateUserRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, int $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Delete User.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        if ($user->posts()->count()) {
            return redirect()->route('users.index')->with('error', 'Error! The user has entries.');
        }

        $user->delete();

        return redirect()->back()->with('info', 'User deleted successfully!');
    }
}
