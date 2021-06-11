<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route('home') }}"><img src="{{ asset('assets/agency-studio/img/logo-dark.png') }}" width=""
                alt="WD">
            {{-- <span class="m-l-10">Admin</span> --}}
        </a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href=""><img src="{{ asset('assets/agency-studio/img/favicon.png') }}"
                            alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ route('dashboard') }}"><i
                        class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="{{ route('about.edit') }}"><i class="zmdi zmdi-nature-people"></i><span>About</span></a>
            </li>
            <li><a href="{{ route('skills.edit') }}"><i class="zmdi zmdi-puzzle-piece"></i><span>Skills</span></a>
            </li>
            <li><a href="{{ route('counter.edit') }}"><i class="zmdi zmdi-exposure-alt"></i><span>Counter</span></a>
            </li>
            <li><a href="{{ route('team.add') }}"><i class="zmdi zmdi-accounts-alt"></i><span>Teams</span></a>
            </li>
            <li><a href="{{ route('portfolio.add') }}"><i
                        class="zmdi zmdi-collection-folder-image"></i><span>Portfolio</span></a>
            </li>
            <li><a href="{{ route('blog.add') }}"><i class="zmdi zmdi-blogger"></i><span>Blogs</span></a>
            </li>
            <li><a href="{{ route('testimonials.add') }}"><i
                        class="zmdi zmdi-comments"></i><span>Testimonials</span></a>
            </li>
            <li class="open"><a href="{{ route('logout') }}"><i class="zmdi zmdi-power"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
</aside>
