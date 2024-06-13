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
            <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-th-large fa-fw"></i> Category<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('category.index') }}">List Category</a>
                </li>
                <li>
                    <a href="{{ route('category.create') }}">Create Category</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        
        <li>
            <a href="#"><i class="fa fa-edit fa-fw"></i> Product<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('product.index') }}">List Product</a>
                </li>
                <li>
                    <a href="{{ route('product.create') }}">Create Product</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-envelope fa-fw"></i> New<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('new.index') }}">List New</a>
                </li>
                <li>
                    <a href="{{ route('new.create') }}">Create New</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-th-list fa-fw"></i> Project<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('project.index') }}">List Project</a>
                </li>
                <li>
                    <a href="{{ route('project.create') }}">Create Project</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-th-list fa-fw"></i> Device<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('device.index') }}">List Device</a>
                </li>
                <li>
                    <a href="{{ route('device.create') }}">Create Device</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="admin/user/list"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('user.index') }}">List User</a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}">Create User</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->
</div>