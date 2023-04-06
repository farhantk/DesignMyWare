<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
    <img src="{{asset('AdminLte')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DesignMyWare</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('AdminLte')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="d-block">{{auth()->user()->name}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-header"><b>Produk</b></li>
        <li class="nav-item">
            <a href="/admin/product" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Produk
                </p>
            </a>
        </li>
        <li class="nav-header"><b>Varian</b></li>
        <li class="nav-item">
            <a href="/admin/varian" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Varian
                </p>
            </a>
        </li>
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
            </a>
        </li>
        <li class="nav-header"><b>Transaksi</b></li>
        <li class="nav-item">
            <a href="/admin/transaksi" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Lihat Seluruh Tranksaksi
                </p>
            </a>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>