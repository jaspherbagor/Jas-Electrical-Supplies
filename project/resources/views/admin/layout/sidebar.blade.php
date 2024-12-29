<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">
                <img src="{{ asset('uploads/JES_logo.png') }}" alt="" class="img-fluid sidebar-logo">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Product Options</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route(('product_list')) }}"><i class="fas fa-angle-right"></i> Product List</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Add Product</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Product Category</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Category List</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Add Category</a></li>
                </ul>
            </li>

            <li class="">
                <a class="nav-link" href="">
                    <i class="fas fa-hand-point-right"></i> <span>Settings</span>
                </a>
            </li>

            <li class="">
                <a class="nav-link" href="">
                    <i class="fas fa-hand-point-right"></i> <span>Shop Information</span>
                </a>
            </li>

            <li class="">
                <a class="nav-link" href="">
                    <i class="fas fa-hand-point-right"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>