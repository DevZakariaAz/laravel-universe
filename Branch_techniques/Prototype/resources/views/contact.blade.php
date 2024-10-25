@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Contact Us</h2>

        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email  :</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
        </form>
    </div>

@endsection