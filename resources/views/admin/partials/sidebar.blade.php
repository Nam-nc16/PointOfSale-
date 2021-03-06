<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.orders.order')}}" class="brand-link">
        <img src="/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Rhust-app</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->photo)
                <img class="img-circle elevation-2" src="{{ asset(Auth::user()->photo) }}" alt="User Image">
                @else<img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                     <li class="nav-item">
                     <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                     </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Danh m???c
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.categories.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Th??m danh m???c</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch danh m???c</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- product-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            S???n ph???m
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.products.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Th??m s???n ph???m</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.products.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch s???n ph???m</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end product-->

                <!-- banner-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Banner
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.banners.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Th??m Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.banners.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch Banner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end banner-->

                <!-- brand-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-copyright" style="margin-left:5px"></i>
                        <p style="margin-left:6px">
                            Th????ng Hi???u
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.brands.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Th??m Th????ng Hi???u</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.brands.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch Th????ng Hi???u</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end brand-->
                <!-- store-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-store-alt" style="margin-left:4px"></i>
                        <p style="margin-left:5px">
                            C???a H??ng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.stores.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Th??m C???a H??ng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.stores.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch C???a h??ng</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end store-->
                <li class="nav-item">
                    <a href="{{route('admin.warehouses.index')}}" class="nav-link">
                        <i class="fas fa-warehouse" style="margin-left:4px"></i>
                        <p style="margin-left:5px">
                            Nh?? kho
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            ????n nh???p h??ng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.purchases.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>T???o ????n h??ng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.purchases.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch ????n h??ng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.purchases.payments')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thanh to??n</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shipping-fast" style="margin-left:4px"></i>
                        <p style="margin-left:5px">
                            V???n chuy???n h??ng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.transfers.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch ????n chuy???n h??ng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.transfers.orders_list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>????n h??ng c???n nh???n</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.products.quotation')}}" class="nav-link">
                        <i class="fas fa-money-bill" style="margin-left:4px"></i>
                        <p style="margin-left:5px">
                            Quotation
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill" style="margin-left:4px"></i>
                        <p style="margin-left:5px">
                            Feeds
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.feeds.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mapping</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.feeds.upfileView')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Up files</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Th??m
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.extras.manage-user')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Qu???n l?? nh??n vi??n</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.extras.create-user')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>T???o nh??n vi??n</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cart-plus"></i>
                        <p style="margin-left: 10px">
                            Gi??? h??ng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.cart-list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh s??ch ????n h??ng</p>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
