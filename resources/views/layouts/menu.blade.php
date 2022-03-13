<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <p>Clientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('processingSessions.index') }}"
       class="nav-link {{ Request::is('processingSessions*') ? 'active' : '' }}">
        <p>Processing Sessions</p>
    </a>
</li>


