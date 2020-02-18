@extends('layouts.layout-admin')
@section('content')
<main class="list">
    <div class="grid title-section">
        <div class="col col-6">
            <h1>{{ $type->name_plural }}</h1>
        </div>
        <div class="col col-4"></div>
        <div class="col col-2">
            <a href="/content/{{ $type->post_key }}/new" class="button action full-width">New {{ $type->name_singular }}</a>
        </div>
    </div>
    <h2>Make a vue component</h2>

    <div class="grid">
        <div class="col col-8"></div>
        <div class="col col-3">
            <div class="input-wrap">
                <input type="text" placeholder="Search"/>
            </div>
        </div>
        <div class="col col-1">
            <button class="full-width">Search</button>
        </div>
    </div>
    <div class="post-list">

    </div>
</main>
@endsection