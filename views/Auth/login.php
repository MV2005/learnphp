<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">

<form action="/login" method="POST">
<div class="field">
  <label class="label" for="email">email</label>
  <div class="control">
    <input class="input" type="email" placeholder="Email" name="email" id="email">
  </div>
</div>

<div class="field">
  <label class="label">password</label>
  <div class="control">
  <input class="input" type="password"  name="password" id="password">
  </div>
</div>
<div class="field">
  <div class="control">
 <input class="button-is-primary" type="submit">
  
  </div>
</div>
</form>

</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>