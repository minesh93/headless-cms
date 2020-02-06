@extends('layout')
@section('content')
<main class="sink">
    <div class="grid first">
        <div class="col col-2 first">2/12</div>
        <div class="col col-2 first">2/12</div>
        <div class="col col-2 first">2/12</div>
        <div class="col col-6 first">6/12</div>

        <div class="col col-2">
            <div class="input-wrap">
                <label>Label</label>
                <input type="text"/>
            </div>
        </div>
        <div class="col col-2">
            <div class="input-wrap">
                <label>Label</label>
                <input type="text"/>
            </div>
        </div>
        <div class="col col-2">
            <div class="input-wrap">
            <label>Label</label>
                <input type="text"/>
            </div>
        </div>
        <div class="col col-6">
            <div class="input-wrap">
                <label>Label</label>
                <input type="text"/>
                <span class="description">Description below</span>
            </div>
        </div>
    </div>
</main>
@endsection