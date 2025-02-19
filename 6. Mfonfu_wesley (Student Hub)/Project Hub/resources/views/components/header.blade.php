<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                    
                
                <li class="nav-item">
                    <a href="{{route('guest.home')}}" class="nav-link active" aria-current="page">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link">
                        Register
                    </a>
                </li>

                @else

                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link active" aria-current="page">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.ca')}}" class="nav-link">
                        CA
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.notes')}}" class="nav-link">
                        NOTES
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.revision')}}" class="nav-link">
                        REVISION
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.results')}}" class="nav-link">
                        RESULTS
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.profile')}}" class="nav-link">
                        PROFILE
                    </a>
                </li>

                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <div class="mb-3 pl-10">
                        <input type="submit" class="btn btn-primary" value="LOGOUT">
                    </div>
                </form>

                @endguest
                
            </ul>
        </div>
    </div>
</nav>