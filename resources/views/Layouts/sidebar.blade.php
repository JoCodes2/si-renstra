<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/visionary2.png" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            @auth
                                {{ auth()->user()->name }}
                            @endauth
                            @auth
                                <span class="user-level">{{ auth()->user()->agency }}</span>
                            @endauth

                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class="fas fa-home"></i>
                        <p>Profil Organisasi</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('swot*') ? 'active' : '' }}">
                    <a href="{{ url('/swot') }}">
                        <i class="fas fa-crop-alt"></i>
                        <p>SWOT</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('gap*') ? 'active' : '' }}">
                    <a href="{{ url('/gap') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>GAP</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('introduction*') ? 'active' : '' }}">
                    <a href="{{ url('/introduction') }}">
                        <i class="fas fa-file-alt"></i>
                        <p>TOWS Introduction</p>
                    </a>
                </li>
            </ul>
             <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('activity*') ? 'active' : '' }}">
                    <a href="{{ url('/activity') }}">
                        <i class="fas fa-file-alt"></i>
                        <p>Aktifitas</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
