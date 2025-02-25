<?php


namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\CustomUser;

class CustomUserController extends Controller
{
    public function index(): View
    {
        $viewData=[];
        $viewData["users"]=CustomUser::all();
        return view('CustomUser.index')->with('viewData',$viewData);
    }
    public function create(): View
    {
        return view('CustomUser.form');
    }
    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'username' => "required",
            'email' => "required|email|unique:custom_users,email",
            'password' => "required"
        ],
    ['email.unique' => 'Email already exists']);

        CustomUser::create($request->only(['username', 'email', 'password']));
        return redirect()->route('user.success');
    }

    public function success(): View
    {
        return view('CustomUser.success');
    }

    public function show(string $id): View
    {
        $viewData=[];
        $viewData["user"]=CustomUser::findOrFail($id);
        return view('CustomUser.show')->with('viewData',$viewData);
    }

    public function delete(string $id): \Illuminate\Http\RedirectResponse
    {
        $user = CustomUser::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }

}