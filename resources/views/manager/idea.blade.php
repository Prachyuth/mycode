<link rel="stylesheet" href="{{ asset('css/ideas.css') }}">

<body>
    <div class="dash shadow-sm p-3 mb-5 bg-white rounded">
        <h2 class="">Add Idea</h2>
        <form method="POST" action="{{ route('save_idea') }}">
            @csrf
            <div class="form-group">
                <label for="industry_type">Industry Type</label>
                <input type="text" class="form-control" id="industry_type" name="industry_type" placeholder="Enter industry type">
            </div>
            <div class="form-group">
                <label for="product_type">Product Type</label>
                <input type="text" class="form-control" id="product_type" name="product_type" placeholder="Enter product type">
            </div>

            <div class="form-group">
                <label for="estimated_budget">Estimated Budget</label>
                <input type="text" class="form-control" id="estimated_budget" name="estimated_budget" placeholder="Enter estimated budget">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
            </div>
            <button class="btn btn-warning">Submit</button>
        </form>
    </div>
</body>

