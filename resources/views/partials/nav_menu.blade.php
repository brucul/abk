<ul class="x-navigation">
    <li class="xn-logo">
        <a href="{{ route('home.index') }}">SI PT.MJB</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{ asset('template/assets/images/users/avatar.jpg') }}" alt="John Doe" />
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="{{ asset('template/assets/images/users/avatar.jpg') }}" alt="John Doe" />
            </div>
            <div class="profile-data">
                <div class="profile-data-name">{{ auth()->user()->name }}</div>
                <div class="profile-data-title">{{ auth()->user()->email }}</div>
            </div>
        </div>
    </li>
    <li class="xn-title">Navigation</li>
    <li class="active">
        <a href="{{ route('home.index') }}"><span class="fa fa-desktop"></span> <span
                class="xn-text">Dashboard</span></a>
    </li>
    <li class="xn-title">Data Input</li>
    <li><a href="{{ route('seluruhkapal.index') }}"><span class="fa fa-file-text"></span> Pendaftaran Calon ABK</a>
    </li>
    <li><a href="{{ route('abk-kapal.index') }}"><span class="fa fa-ship"></span> Data ABK diatas Kapal</a></li>
    <li><a href="{{ route('datakapal.index') }}"><span class="fa fa-ship"></span> Data Kapal</a></li>
    <li><a href="{{ route('seluruhabk.index') }}"><span class="fa fa-users"></span> Data Seluruh ABK</a></li>
    {{-- <li class="xn-title">Components</li>
    <li><a href="#"><span class="fa fa-file"></span> Data Seluruh Kapal</a></li> --}}
</ul>
