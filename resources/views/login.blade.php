@extends('layouts.layout')
@section('content')
<main class="login">
    <form method="POST" action="/login">
        <h1>Login</h1>
        @csrf
        <div class="form-wrap">
            <div class="input-wrap">
                <label for="email">Email</label>
                <input type="text" name="email" id="email"/>
            </div>
            <div class="input-wrap">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"/>
            </div>
            <button class="action" type="submit">Do Nothing</button>
        </div>
    </form>
</main>
@endsection