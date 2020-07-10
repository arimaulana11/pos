<li class="header">Master Data</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('barangs*') ? 'active' : '' }}">
    <a href="{{ route('barangs.index') }}"><i class="fa fa-edit"></i><span>Barangs</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('menus*') ? 'active' : '' }}">
    <a href="{{ route('menus.index') }}"><i class="fa fa-edit"></i><span>Menus</span></a>
</li>
<li class="header">Transaction</li>
<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('orderDetails*') ? 'active' : '' }}">
    <a href="{{ route('orderDetails.index') }}"><i class="fa fa-edit"></i><span>Order Details</span></a>
</li>

<li class="header">Report</li>
<li class="header">Setting</li>

<li class="treeview">
    <a href="#"><i class="fa fa-th"></i> <span>Role</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
        </li>

        <li class="{{ Request::is('roleDetails*') ? 'active' : '' }}">
            <a href="{{ route('roleDetails.index') }}"><i class="fa fa-edit"></i><span>Role Details</span></a>
        </li>
    </ul>
</li>

