<li class="nav-item {{ Request::is('citations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('citations.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Citations</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('films*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('films.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Films</span>
    </a>
</li>
