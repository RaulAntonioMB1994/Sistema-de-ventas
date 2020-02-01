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
          <li >
            <a href="{{url('categories')}}">
              <i class="nc-icon nc-box-2"></i>
              <p>Categorias</p>
            </a>
          </li>
          <li >
            <a href="{{url('/products/index')}}">
              <i class="nc-icon nc-app"></i>
              <p>Productos</p>
            </a>
          </li>
          
        </ul>
      </div>
