<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // --- Vistas ---

    public function login()
    {
        // Si el usuario ya está autenticado, redirigirlo para evitar que vea la vista de login.
        if (Auth::check()) {
            return redirect()->route('dashboard'); // O a la ruta que uses
        }
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    // --- Lógica de Autenticación (POST) ---

    public function loginPost(Request $request)
    {
        // 1. Validar las credenciales
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // 2. Intentar autenticar al usuario
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) { // Añadir soporte para "Recuérdame"
            // Regenerar la sesión por seguridad
            $request->session()->regenerate();

            // 3. Redirigir según el rol o al dashboard
            $user = Auth::user();
            // Implementación simple de redirección basada en rol (si lo tienes)
            // if ($user->role === 'admin') {
            //     return redirect()->intended('/admin');
            // }

            return redirect()->intended('dashboard')->with('success', '¡Bienvenido de nuevo!');

        }

        // 4. Fallo de autenticación
        return back()->withInput($request->only('email'))
                     ->withErrors(['error' => 'Credenciales proporcionadas no válidas.']);
    }

    // Función de registro unificada y mejorada
    public function registerPost(Request $request)
    {
        // 1. Validar los datos
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // 'confirmed' requiere un campo password_confirmation
        ]);

        // 2. Crear el usuario
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            // Usar Hash::make() en lugar de bcrypt() para consistencia
            'password' => Hash::make($request->password), 
            // 'role' => 'vendedor', // Añadir un rol por defecto si es necesario en tu tabla 'users'
        ]);

        // 3. Iniciar sesión automáticamente (como en tu segundo fragmento)
        Auth::login($user); 
        $request->session()->regenerate();

        // 4. Redirigir al dashboard
        return redirect()->route('dashboard')->with('success', '¡Registro exitoso! Ya has iniciado sesión.');
    }

    // --- Cierre de Sesión ---
    
    public function logout(Request $request)
    {
        Auth::logout();
        
        // Invalidar la sesión y regenerar el token (práctica de seguridad recomendada)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Sesión cerrada correctamente.');
    }
}