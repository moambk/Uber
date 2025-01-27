@extends('layouts.app')

@section('title', 'Réinitialiser le mot de passe')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.blade.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Réinitialiser le mot de passe</h1>

        <form method="POST" action="{{ route('password.update') }}" class="form-login d-flex flex-column justify-content-center">
            @csrf

            <div class="mb-3">
                <label for="current_password" class="form-label">Mot de passe actuel</label>
                <input type="password" name="current_password" id="current_password" required
                    class="form-control" placeholder="Entrez votre mot de passe actuel">
                @error('current_password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password" class="form-label">Nouveau mot de passe</label>
                <input type="password" name="new_password" id="new_password" required
                    class="form-control" placeholder="Entrez votre nouveau mot de passe">
                @error('new_password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Confirmer le nouveau mot de passe</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" required
                    class="form-control" placeholder="Confirmez votre nouveau mot de passe">
            </div>

            <button type="submit" class="btn-compte">Mettre à jour</button>

            <div class="text-center mt-3">
                <a href="{{ route('myaccount') }}" class="login-link">Retourner à mon compte</a>
            </div>
        </form>
    </div>
@endsection
