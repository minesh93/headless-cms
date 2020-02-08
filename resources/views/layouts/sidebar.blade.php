<nav class="sidebar">
    <div class="sidebar-title">Headless CMS</div>

    <div class="nav-section">
        <div class="section-title">Content</div>
        <ul class="nav-list">
            @foreach ($headless->types as $key => $type)
                <li>
                    <a href="/content/{{$key}}">{{ $type->name_plural }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="nav-section">
        <div class="section-title">Settings</div>
        <ul class="nav-list">
            <li>
                <a href="#">Users</a>
            </li>
            <li>
                <a href="#">Stuff</a>
            </li>
        </ul>
    </div>
</nav>