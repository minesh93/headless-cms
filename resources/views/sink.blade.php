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
        <div class="col col-1">
            <div class="input-wrap">
                <label>Label</label>
                <input type="text"/>
            </div>
        </div>
        <div class="col col-3">
            <div class="input-wrap">
            <label>Label</label>
                <input type="text"/>
                <span class="description">Description below</span>
            </div>
        </div>
        <div class="col col-4">
            <div class="input-wrap">
                <label>Label</label>
                <span class="description">Or description below.</span>
                <textarea></textarea>
            </div>
        </div>
        <div class="col col-2">
            <div class="input-wrap">
                <label>Label</label>
                <input type="text"/>
            </div>
        </div>
        <div class="col col-1">
            <div class="check-wrap">
                <label>Checkboxes</label>
                <div class="check-wrap">
                    <label for="check-1">
                        <input type="checkbox" id="check-1"> <span>Option 1</span>
                    </label>
                    <label for="check-2">
                        <input type="checkbox" id="check-2"> <span>Option 2</span>
                    </label>
                    <label for="check-3">
                        <input type="checkbox" id="check-3"> <span>Option 3</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col col-3">
            <div class="check-wrap">
                <label>Inline</label>
                <div class="check-wrap inline">
                    <label for="check-4">
                        <input type="checkbox" id="check-4"> <span>Option 4</span>
                    </label>
                    <label for="check-5">
                        <input type="checkbox" id="check-5"> <span>Option 5</span>
                    </label>
                    <label for="check-6">
                        <input type="checkbox" id="check-6"> <span>Option 6</span>
                    </label>
                </div>
                <span class="description">Or description above. </span>
            </div>
        </div>

        <div class="col col-2">
            <div class="check-wrap">
                <label>Radio</label>
                <div class="check-wrap">
                    <label for="radio-1">
                        <input type="radio" name="radio-test" value="1" id="radio-1"> <span>Option 1</span>
                    </label>
                    <label for="radio-2">
                        <input type="radio" name="radio-test" value="2" id="radio-2" checked> <span>Option 2</span>
                    </label>
                    <label for="radio-3">
                        <input type="radio" name="radio-test" value="3" id="radio-3"> <span>Option 3</span>
                    </label>
                </div>
                <span class="description">Or description above. </span>
            </div>
        </div>
    </div>
</main>
@endsection