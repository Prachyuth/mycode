<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<body>
    <header>
        <h1 class="pom"> Idea Generator</h1>
        <div class="headtwo">
            <nav>
                <ul>
                  <li><a href="/clients">Clients</a></li>
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
<h1>Products</h1>
    </div>
     <table>
     <thead>
       <tr>
         <th>Idea Number</th>
         <th>Industry Type</th>
         <th>Product Type</th>
         <th>Budget</th>
         <th>Location</th>

        </tr>
     </thead>
     <tbody>

       @foreach ($ideas as $index => $idea)
       <tr>
           <th scope="row">{{ $index + 1 }}</th>
           <td>{{ $idea->industry_type }}</td>
           <td>{{ $idea->product_type }}</td>
            <td>{{ $idea->estimated_budget }}</td>
           <td>{{ $idea->location }}</td>

       </tr>
   @endforeach
     </tbody>
   </table>



     </body>
