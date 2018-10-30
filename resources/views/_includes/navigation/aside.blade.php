<div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="navbar navbar-inner block-header">
            <div class="muted pull-left">General</div>
        </li>

        <!--User Pannel -->
        @role('user')
        <!--<li class="{{ Route::currentRouteNamed('kb.index') ? 'active' : '' }}">
            <a href="{{route('kb.index')}}"><i class="icon-file"></i> Knowledge Base</a>
        </li>-->
         <li class="{{Nav::isResource('kb')}}">
            <a href="{{route('kb.index')}}"><i class="icon-file"></i> Knowledge Base</a>
        </li>

        <li class="{{Nav::isResource('escalation')}}">
            <a href="{{route('escalation.index')}}"><i class="icon-folder-open"></i> Escalation</a>
        </li>

        <li class="{{Nav::isResource('links')}}">
            <a href="{{route('links.index')}}"><i class="icon-lock"></i> Links</a>
        </li>

         <li class="{{Nav::isResource('support_contacts')}}">
            <a href="{{route('support_contacts.index')}}"><i class="icon-user"></i> Supports</a>
        </li>

        <li class="{{ Route::currentRouteNamed('contact.index') ? 'active' : '' }}">
            <a href="{{route('contact.index')}}"><i class="icon-book"></i> Contacts</a>
        </li>

        <li class="{{Nav::isResource('template')}}">
            <a href="{{route('template.index')}}"><i class="icon-pencil"></i> Template</a>
        </li>

         <li class="{{Nav::isResource('playbook')}}">
            <a href="{{route('playbook.index')}}"><i class="icon-folder-close"></i> Automation Playbook</a>
        </li>

        @endrole

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