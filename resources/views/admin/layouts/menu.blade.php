<div class="sidebar-left">
    <div class="sidebar-topbar text-center">
        <i class="fas fa-hotel"></i><span class="text">Star Hotel</span>

    </div> <!-- End sidebar-topbar -->
    <!-- End sidebar-topbar -->

    <div class="side-menu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="sidebar-header">
                    <img src="{{ asset('assets') }}/images/commenter-1.jpg" alt="sidebar-header-img"
                        class="img-fluid rounded-circle">
                    <h5>{{Auth::user()->name}}</h5>
                    <small>
                        <p>Incharge</p>
                    </small>
                    <ul class="list-unstyled">
                        <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Messages"><a
                                class="sidebar-header-icons" href="messages-inbox.html"><i
                                    class="far fa-envelope"></i></a></li>
                        <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Notifications"><a
                                class="sidebar-header-icons" href="#"><i class="far fa-bell"></i></a></li>
                        <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Reviews"><a
                                class="sidebar-header-icons" href="reviews.html"><i class="far fa-star"></i></a>
                        </li>
                        <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Bookmarks"><a
                                class="sidebar-header-icons" href="bookmarks.html"><i class="far fa-bookmark"></i></a>
                        </li>
                    </ul>
                </div><!-- end sidebar-header -->
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="items-list first active">
                    <span><i class="fa fa-home link-icon" data-toggle="tooltip" data-html="true"
                            title="Dashboard"></i></span>
                    <span class="items-list-text">Trang chủ</span>
                </a>
            </li>
            <li class="nav-item">
				<a href="#Hotel-Listing" class="items-list" data-toggle="collapse" aria-expanded="false">
					<span><i class="fas fa-hotel" data-toggle="tooltip" data-html="true" title="Hotel"></i></span>
                    <span class="items-list-text">Quản lý phòng</span>
                    <span><i class="fa fa-chevron-down arrow"></i></span>
                </a>
                <div class="collapse sub-menu" id="Hotel-Listing">
					<a class="items-list1" href="{{ route('rooms_type.index') }}">Danh sách hạng phòng</a>
					<a class="items-list1" href="{{ route('rooms.index') }}">Danh sách phòng</a>
                </div>
            </li>
			<li class="nav-item">
				<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
					<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true" title="Users"></i></span>
					<span class="items-list-text">Users</span>
					<span><i class="fa fa-chevron-down arrow"></i></span>
				</a>
				<div class="collapse sub-menu" id="users">
					<a class="items-list1" href="users-create-user.html">Create User</a>
					<a class="items-list1" href="users-list.html">List</a>
				</div><!-- End sub-menu -->
			</li>
            <li class="nav-item">
                <a href="#booking" class="items-list" data-toggle="collapse" aria-expanded="false">
                    <span><i class="fas fa-suitcase-rolling" data-toggle="tooltip" data-html="true"
                            title="Bookings"></i></span>
                    <span class="items-list-text">Đơn đặt phòng</span>
                    <span><i class="fa fa-chevron-down arrow"></i></span>
                </a>
                <div class="collapse sub-menu" id="booking">
                    <a class="items-list1" href="{{route('booking.index')}}">Danh sách</a>
                </div><!-- End sub-menu -->
            </li>
            <li class="nav-item">
                <a href="{{route('blog.index')}}" class="items-list">
                    <span><i class="far fa-bookmark" data-toggle="tooltip" data-html="true"
                            title="Reviews"></i></span>
                    <span class="items-list-text">BLOG</span>
                </a>
            </li>
     
                    </a>
                </div><!-- End sub-menu -->
            </li>
        </ul>
    </div><!-- End side-menu -->
    <div class="side-bar-bottom">
        <ul class="list-unstyled">
            <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Edit Profile"><a
                    href="profile-edit-profile.html"><i class="fas fa-cog"></i></a></li>
            <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Change Password"><a
                    href="profile-change-password.html"><i class="fas fa-key"></i></li>
            <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Lockscreen"><a
                    href="#"><i class="fas fa-unlock"></i></a></li>
            <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout"><a href="#"><i
                        class="fas fa-power-off"></i></a></li>
        </ul>
    </div><!-- End side-bar-bottom -->
</div>
