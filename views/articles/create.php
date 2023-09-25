<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
<h1 class="is-size-1">New Article</h1>

<form action="/admin/articles" method="POST">
<div class="field">
  <label class="label" for="title">Title</label>
  <div class="control">
    <input class="textarea" placeholder="Title" name="title" id="title">
  </div>
</div>

<div class="field">
  <label class="label">Content</label>
  <div class="control">
    <textarea class="input" type="text" placeholder="Content..." name="body" id="body"></textarea>
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