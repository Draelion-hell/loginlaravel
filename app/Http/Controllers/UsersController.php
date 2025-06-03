<?php

namespace App\Http\Controllers;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('Users.usuarios' , compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);*/
        $remember_token = bin2hex(random_bytes(10));

        $user = new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password = bcrypt ($request->password);
        

        $user->remember_token = $remember_token;
        
        $user-> save();

        $user->notify(new UserNotification());


        //return redirect()->intended('/usuarios');
        return response()->json([
        'message'=>'Usuario creado correctamente, por favor revisa tu correo para activar tu cuenta.'],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::findOrFail($id);
        return view('users.editusuarios', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $usuario = User::findOrFail($id);

    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');

        $usuario->save();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();

    }
}
