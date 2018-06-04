<header class="main-header">
<?php
$uri = $_SERVER['REQUEST_URI'];
$url = url()->current();
$link = explode("/",$url);
$idmenu = explode("&",$uri);
?>
    <!-- Logo -->
    <a href="/admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="{{route('logout')}}">
                    <i class="fa fa-sign-out text-danger"></i> Log out</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if($link[3]=="menu-img" || $link[3]=="hinh-anh") echo "active"?> treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                @foreach($menus as $menu)
                    <li class=<?php if(($link[3]=="menu-img" && $link[4]==$menu->id) || $idmenu[count($idmenu)-1]=="idmenu=".$menu->id) echo "active"?>>
                        <a href="{{route('imgmenu',$menu->id)}}">
                            <i class="fa fa-circle-o"></i>{{$menu->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class=<?php if($link[3]=="cautraloi") echo "active"?>>
                <a href="{{route('answer.index')}}" >
                    <i class="fa fa-th"></i>
                    <span>Answer</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">{{DB::table('cautraloi')->where('seen',0)->count()}}</small>
                    </span>
                </a>
            </li>
            <li class="header">LABELS</li>
            <li>
                <a href="{{route('user.index')}}">
                    <i class="fa fa-circle-o text-yellow"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i>
                    <span>Information</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>