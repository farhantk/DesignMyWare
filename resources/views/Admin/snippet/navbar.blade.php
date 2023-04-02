<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
        <li class="nav-item">
            <form class="form-inline" action="/admin/signout" method="post">
                @csrf
                <button class="btn btn-link" type="submit">Log Out</button>
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->