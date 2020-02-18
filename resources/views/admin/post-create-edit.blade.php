@extends('layouts.layout-admin')
@section('content')
<main class="post-create-edit">
    <h1>{{ $title }}</h1>
    <div id="app">
        <div class="grid">
            <div class="col col-9">
                <div class="input-wrap">
                    <input type="text" placeholder="Title" v-model="post.name"/>
                </div>
            </div>
            <div class="col col-3 post-sidebar-wrap">
                <div class="post-sidebar">
                    <div class="section">
                        <div class="grid">
                            <div class="col col-12">
                                <div class="input-wrap">
                                    <label>Key</label>
                                    <div class="input-fix">
                                        <input type="text" placeholder="Key" v-model="post.key"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="input-wrap">
                                    <label>Created</label>
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="input-wrap">
                                    <label>Updated</label>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="input-wrap">
                                    <button class="action full-width" @click="update">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    window._POST = @json($post);
    window._TYPE = @json($type);
</script>

<script src="{{ mix('/js/app.js') }}"></script>
@endsection