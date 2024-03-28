 {{-- Start header  --}}
 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1>Append</h1>
            <span>.</span>
        </a>
        {{-- Nav Menu --}}
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('home_index')}}" class="active">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                {{-- <li><a href="index.html#portfolio">Portfolio</a></li> --}}
                {{-- <li><a href="index.html#team">Team</a></li> --}}
                <li><a href="{{route('main_blog')}}">Blog</a></li>
                <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i class="fa-solid fa-chevron-down"></i></a>
                            <ul class="dd-box-shadow">
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="">Contact</a></li>
                <li class="dropdown has-dropdown"><a href="#"><span>Content</span> <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="#">New Content</a></li>
                        <li><a href="#">Create Content</a></li>
                    </ul>
                </li>
                <li class="dropdown has-dropdown"><a href="#"><span>User</span> <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- End Nav Menu --}}
        <a class="btn-getstarted" href="{{route('home_index')}}">Get Started</a>
    </div>
</header>
{{-- End Header  --}}