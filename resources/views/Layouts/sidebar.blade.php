<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <div class="avatar-img rounded-circle" id="avatarUsersSidebar">
                    </div>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            @auth
                                {{ auth()->user()->name }}
                            @endauth
                            @auth
                                <span class="user-level">{{ auth()->user()->position }}</span>
                            @endauth

                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ url('/user-setting') }}">
                                    <span class="link-collapse">Profil Saya</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class="fas fa-home"></i>
                        <p>Profil Organisasi</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('swot*') ? 'active' : '' }}">
                    <a href="{{ url('/swot') }}">
                        <i class="fas fa-crop-alt"></i>
                        <p>SWOT</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('gap*') ? 'active' : '' }}">
                    <a href="{{ url('/gap') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>GAP</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('smart*') ? 'active' : '' }}">
                    <a href="{{ url('/smart') }}">
                        <i class="fas fa-lightbulb"></i>
                        <p>SMART</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('matrix*') ? 'active' : '' }}">
                    <a href="{{ url('/matrix') }}">
                        <i class="fas fa-book"></i>
                        <p>TOWS Introduction</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('activity*') ? 'active' : '' }}">
                    <a href="{{ url('/activity') }}">
                        <i class="fas fa-tasks"></i>
                        <p>Aktifitas</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
