
<link rel="stylesheet" href="{{ asset('css/manhome.css') }}">

<body>
    <header>
        <h1 class="pom"> Idea Generator</h1>
        <div class="headtwo">
            <nav>
                <ul>
                  <li><a href="#">Clients</a></li>
                  </ul>
              </nav>
              <div class="topnav">
                  <div class="side">
                      <img src="images/a.jpg" class="rounded-circle" alt="Cinque Terre">

                      <h5>
                          {{ Auth::user()->name }}
                      </h5>
                  </div>

              </div>
        </div>

    </header>
    <div class="profile">
        <img src="images/a.jpg" alt="Profile Picture">
        <h2> {{ Auth::user()->name }}</h2>
        <p>Email:  {{ Auth::user()->email }}</p>
        <p>Location: New York City</p>
        <p>Preferred: {{ Auth::user()->preferred_product }} </p>
         <a href="#" class="btn btn-edit">Edit Profile</a>
    </div>
</body>
