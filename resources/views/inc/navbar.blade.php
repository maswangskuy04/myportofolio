<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <ul>

                        <li class="header-icon dib"><i class="ti-bell"></i>
                            <div class="drop-down">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <div class="notification-heading">CRUD BROOH</div>
                                                @if (session('message'))
                                                <div class="notification-text">{{ session('message') }} </div>
                                                @endif
                                            </div>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-icon dib"><span class="user-avatar">{{ Auth::user()->nama_lengkap }} <i class="ti-angle-down f-s-10"></i></span>
                            <div class="drop-down dropdown-profile">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href=""><i class="ti-user"></i> <span>Profile</span></a></li>
                                        <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                        <li>
                                            <form action="{{ route('destroy') }}" method="post">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
