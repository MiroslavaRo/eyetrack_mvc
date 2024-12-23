<header class=" ">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm navbar navbar-expand-lg navbar-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset("imgs/Logo.svg")}}" alt="Logo"
                    style="width: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5 " id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-4 ">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Начало</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"
                            href="{{ route('contact') }}">Контакти</a>
                    </li>
                    @if (Route::has('login'))
                        <li class="-mx-3 flex-1 justify-end d-lg-flex">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="nav-link me-3 {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                                    Dashboard
                                </a>

                                <form method="POST" class="" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        class="btn bg-green text-white rounded-3 py-2 px-sm-5 px-3"
                                        onclick="event.preventDefault();
                                                                                                                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn bg-green text-white rounded-3 py-2 px-sm-5 px-3">
                                    Log in
                                </a>
                            @endauth
                        </li>
                    @endif
                </ul>
            </div>


        </div>
    </nav>
</header>