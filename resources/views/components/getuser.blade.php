<form method="post">
    @csrf  
    <div class="mt-2 mb-2 w-50">
        <label for="username" class="form-label">Username</label>
        <input name="username" type="text" class="form-control" placeholder="Enter your Github username...">
    </div>
    <button type="submit" class="btn btn-primary">Try it!</button>
</form>