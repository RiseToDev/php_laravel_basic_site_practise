<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" style="color: #a29d9d">Basic navbar</a>
        <div class="collapse navbar-collapse" id="navbarsExample07">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>


        </div>
    </div>
</nav>


