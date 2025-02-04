<form method="POST" action="/auth/login">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>