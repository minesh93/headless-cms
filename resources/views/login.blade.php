@extends('layout')
@section('content')
<main class="login">
    <h1>Login</h1>
    <form>
        <div class="form-wrap">
            <div class="input-wrap">
                <label>Username</label>
                <input type="text"/>
            </div>
            <div class="input-wrap">
                <label>Password</label>
                <input type="password"/>
            </div>
            <button>Do Nothing</button>
        </div>
    </form>
</main>
@endsection