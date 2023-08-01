<link rel="stylesheet" href="{{ asset('css/comp.css') }}">

<body>
    <div class="edit-profile">
        <h2>View Profile</h2>
        <form method="post">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" disabled value="{{ $ideas->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" disabled value="{{ $ideas->email }}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="New York City" disabled>
            </div>

            <div class="form-group">
                <label for="bio">Preferred Product</label>
                <input type="text" id="age" name="preferred_product" disabled  value="{{ $ideas->preferred_product }}">

             </div>
            <button type="" class="btn btn-save">Assign</button>
        </form>
    </div>
</body>
</html>
