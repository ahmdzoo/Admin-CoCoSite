<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('home') }}" class="simple-text">
                <img src="{{ asset('image/logo-nama.png') }}" alt="Logo" style="width: 150px; height: auto;">
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" role="button" aria-expanded="{{ $activeButton == 'laravel' ? 'true' : 'false' }}" aria-controls="laravelExamples">
                    <i class="nc-icon nc-key-25"></i>
                    <p>
                        {{ __('AKUN') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton == 'laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("Admin") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("User") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Produk") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'table') active @endif">
                <a class="nav-link" href="{{ route('page.index', 'table') }}">
                    <i class="nc-icon nc-cart-simple"></i>
                    <p>{{ __("Transaksi") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'icons') active @endif">
                <a class="nav-link" href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Laporan") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'maps') active @endif">
                <a class="nav-link" href="{{ route('page.index', 'maps') }}">
                    <i class="nc-icon nc-settings-gear-64"></i>
                    <p>{{ __("Pengaturan") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Notifications") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
