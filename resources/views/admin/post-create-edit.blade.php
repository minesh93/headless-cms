@extends('layouts.layout-admin')
@section('content')
<main class="post-create-edit">
    <h1>{{ $title }}</h1>
    <div id="app">
        <div class="grid">
            <div class="col col-9">
                <v-input placeholder="Title" type="text" v-model="post.name"></v-input>

                <div class="post-content-wrap">
                    @if(isset($type->content))
                        @foreach ($type->content as $content)
                            <div class="post-content content-{{ $content->key }}">
                                @include("templates.{$content->template}")
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col col-3 post-sidebar-wrap">
                <div class="post-sidebar">
                    <div class="section">
                        <div class="grid">
                            <div class="col col-12">
                                <v-input id="post-key" :prefix="type.key" placeholder="Key" type="text" v-model="post.key"></v-input>
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
    window._CONTENT = @json($mapped_content);
</script>

<script src="{{ mix('/js/app.js') }}"></script>
@endsection