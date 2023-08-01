<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<body>
    <header>
        <h1 class="pom"> Idea Generator</h1>
        <div class="headtwo">
            <nav>
                <ul>
                  <li><a href="/home">Product</a></li>
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
    <div class="admin-container">
<h1>Clients</h1>
    </div>
     <table>
     <thead>
       <tr>
        <th>No</th>
         <th>Client Name</th>
         <th>Email</th>
         <th>Preferred Product</th>
          <th>View</th>

        </tr>
     </thead>
     <tbody>

       @foreach ($ideas as $index => $idea)
       <tr>
           <th scope="row">{{ $index + 1 }}</th>
           <td>{{ $idea->name }}</td>
           <td>{{ $idea->email }}</td>
            <td>{{ $idea->preferred_product }}</td>

            <td><button                                 onclick="location.href='{{ url('clientcom', $idea->id) }}'"
                >
                view</button></td>

       </tr>
   @endforeach
     </tbody>
   </table>



     </body>
