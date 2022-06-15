<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="home">
        <i class=" fas fa-map-marked"></i><span>Mapa</span>
    </a>
    @can('administrador')
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="/patinetes">
        <i class=" fa fa-motorcycle"></i><span>Patinetes</span>
    </a>
    @endcan
    <a class="nav-link" href="/proveedor">
        <i class=" fas fa-wrench"></i><span>Ser proveedor</span>
    </a>
</li>
