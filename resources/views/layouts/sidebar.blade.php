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
            <a href="{{url('categories')}}">
              <i class="nc-icon nc-box-2"></i>
              <p>Categorias</p>
            </a>
          </li>

          <li>
            <a href="{{url('products')}}">
              <i class="nc-icon nc-app"></i>
              <p>Productos</p>
            </a>
          </li>

          <li>
            <a href="{{url('business')}}">
              <i class="nc-icon nc-briefcase-24"></i>
              <p>Empresa</p>
            </a>
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
