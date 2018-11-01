<div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="navbar navbar-inner block-header">
            <div class="muted pull-left">General</div>
        </li>

        <li  class="#">
            <a href="#"><i class="icon-film"></i> Dashboard</a>
        </li>

        <!--User Pannel -->
       

        @role('superadministrator')

        
        <!--<li class="{{ Route::currentRouteNamed('manage.dashboard') ? 'active' : '' }}">
            <a href="{{route('manage.dashboard')}}"><i class="icon-home"></i> Dashboard</a>
        </li>-->
        <!--<li class="navbar navbar-inner block-header">
            <div class="muted pull-left">Content</div>
        </li>
        <li>
            <a href="#.html"><i class="icon-plus"></i>Add Post</a>
        </li>
        <li>
            <a href="#.html"><i class="icon-book"></i>Blog Categories</a>
        </li>-->
        <li class="navbar navbar-inner block-header">
            <div class="muted pull-left">Administrator</div>
        </li>
        <li  class="{{Nav::isResource('users')}}">
            <a href="{{route('users.index')}}"><i class="icon-user"></i> Manage Users</a>
        </li>

        <li  class="{{Nav::isResource('roles')}}">
            <a href="{{route('roles.index')}}"><i class="icon-folder-close"></i> Roles</a>
        </li>

        <li  class="{{Nav::isResource('permissions')}}">
            <a href="{{route('permissions.index')}}"><i class="icon-lock"></i> Permissions</a>
        </li>
        @endrole

    </ul>
</div>