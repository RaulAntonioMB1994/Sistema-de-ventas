<div class="logo">
  <a href="#" class="simple-text logo-mini">
    <div class="logo-image-small">
      <img src="{{asset('../assets/img/logo-small.png')}}">
    </div>
  </a>
  <a href="#" class="simple-text logo-normal">
    @yield('title','Sistema de ventas')
  </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="active ">
      <a href="{{url('dashboard')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Dashboard</p>
      </a>
    </li>

    @if (auth()->user()->type === 'Administrador')

    <li>
      <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#inventario">
          <span class="sidebar-icon"><i class="nc-icon nc-tile-56"></i></span>
          <span class="sidebar-title dropdown-toggle">Inventario</span>
      </a>
      <ul id="inventario" class="panel-collapse collapse panel-switch" role="menu" style="list-style-type:none;">
          <li><a href="{{url('categories')}}"><i class="nc-icon nc-box-2"></i>Categorias</a></li>
          <li><a href="{{url('products')}}"><i class="nc-icon nc-app"></i>Productos</a></li>
          {{-- <li><a href="{{url('products')}}"><i class="nc-icon nc-sound-wave"></i>Stock Productos</a></li> --}}
      </ul>
  </li>

  <li>
    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#ventas">
        <span class="sidebar-icon"><i class="nc-icon nc-chart-bar-32"></i></span>
        <span class="sidebar-title dropdown-toggle">Ventas</span>
    </a>
    <ul id="ventas" class="panel-collapse collapse panel-switch" role="menu" style="list-style-type:none;">
        <li><a href="{{url('sales')}}"><i class="nc-icon nc-cart-simple"></i>Registrar Venta</a></li>
        {{-- <li><a href="{{url('products')}}"><i class="nc-icon nc-money-coins"></i>Devolución</a></li>
        <li><a href="{{url('products')}}"><i class="nc-icon nc-bag-16"></i>Descuentos</a></li> --}}
    </ul>
</li>

{{-- <li>
  <a href="{{url('sales')}}">
    <i class="nc-icon nc-single-02"></i>
    <p>Clientes</p>
  </a>
</li> --}}


  <li>
    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#configuraciones">
        <span class="sidebar-icon"><i class="nc-icon nc-settings-gear-65"></i></span>
        <span class="sidebar-title dropdown-toggle">Configuraciones</span>
    </a>
    <ul id="configuraciones" class="panel-collapse collapse panel-switch" role="menu" style="list-style-type:none;">
        <li><a href="{{url('business')}}"><i class="nc-icon nc-istanbul"></i>Empresa</a></li>
        <li><a href="{{url('shops')}}"><i class="nc-icon nc-shop"></i>Tiendas</a></li>
        {{-- <li><a href="{{url('shops')}}"><i class="nc-icon nc-single-02"></i>Usuarios</a></li> --}}
    </ul>
</li>



    @endif

    @if (auth()->user()->type === 'Vendedor(a)')

    <li>
      <a href="{{url('sales')}}">
        <i class="nc-icon nc-app"></i>
        <p>Ventas</p>
      </a>
    </li>

    @endif
  </ul>
</div>