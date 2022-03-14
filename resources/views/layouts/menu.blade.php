<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <p>Clientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('processingSessions.index') }}"
       class="nav-link {{ Request::is('processingSessions*') ? 'active' : '' }}">
        <p>Ofertas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tipoProductos.index') }}"
       class="nav-link {{ Request::is('tipoProductos*') ? 'active' : '' }}">
        <p>Tipo Productos</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('productos.index') }}"
       class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
        <p>Productos</p>
    </a>
</li>





<li class="nav-item">
    <a href="{{ route('contratos.index') }}"
       class="nav-link {{ Request::is('contratos*') ? 'active' : '' }}">
        <p>Contratos</p>
    </a>
</li>


