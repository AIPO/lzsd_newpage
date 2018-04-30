<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/">LŽSD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02"
            aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{Request::is('/')? "active":""}}" href="/">Home</a></li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('blog')? "active":""}}" href="{{route('blog.index')}}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('about')? "active":""}}" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">My Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="{{route('posts.index')}}">Posts</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>