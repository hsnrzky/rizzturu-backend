<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="/"><svg width="30" height="30" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.6 5.922c.785-.827 2.139-1.063 3.735-.903 1.48.15 3.003.628 4.065 1.072v11.908c-1.101-.42-2.528-.83-3.944-.972-1.313-.134-2.734-.047-3.856.59V5.922ZM12 4.837c-1.182-1.016-2.895-1.168-4.455-1.012-1.817.184-3.65.807-4.793 1.326a.6.6 0 0 0-.352.546v13.2a.6.6 0 0 0 .849.546c1.058-.48 2.763-1.057 4.416-1.224 1.69-.17 3.108.105 3.867 1.053a.6.6 0 0 0 .936 0c.76-.948 2.177-1.223 3.867-1.053 1.653.167 3.36.744 4.417 1.224a.6.6 0 0 0 .848-.546v-13.2a.6.6 0 0 0-.351-.546c-1.143-.52-2.976-1.142-4.793-1.326-1.56-.157-3.274-.004-4.456 1.012Z"></path>
    </svg> TuruDX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
                </li>
            @endauth
        </ul>

      </div>
    </div>
</nav>
