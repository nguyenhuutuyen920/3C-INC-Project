<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Trang Chủ</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-th-large fa-fw"></i> Danh Mục<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('category.index') }}">Danh sách danh mục</a>
                </li>
                <li>
                    <a href="{{ route('category.create') }}">Tạo danh mục</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        
        <li>
            <a href="#"><i class="fa fa-edit fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('product.index') }}">Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="{{ route('product.create') }}">Tạo sản phẩm</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-envelope fa-fw"></i> Tin Tức<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('new.index') }}">Danh sách tin tức</a>
                </li>
                <li>
                    <a href="{{ route('new.create') }}">Tạo tin tức</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-th-list fa-fw"></i> Dự Án<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('project.index') }}">Danh sách dự án</a>
                </li>
                <li>
                    <a href="{{ route('project.create') }}">Tạo dự án</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-thumb-tack fa-fw"></i> Thiết Bị<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('device.index') }}">Danh sách thiết bị</a>
                </li>
                <li>
                    <a href="{{ route('device.create') }}">Tạo thiết bị</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-th-list fa-fw"></i> Hãng<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('supplier.index') }}">Danh sách Hãng</a>
                </li>
                <li>
                    <a href="{{ route('supplier.create') }}">Tạo hãng</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="admin/user/list"><i class="fa fa-users fa-fw"></i> Tài Khoản Người Dùng<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('user.index') }}">Danh sách tài khoản người dùng</a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}">Tạo tài khoản người dùng</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->
</div>