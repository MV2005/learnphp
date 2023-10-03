<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
<a href="/admin/users/new" class="button is-primary">New User</a>
<table class="table is-striped is-fullwidth">
<thead>
    <th>Id</th>
    <th>Email</th>
    <th>Actions</th>
</thead>
<tbody>
<?php foreach ($users as $user):?>
<tr>
<td><?=$user->id?></td>
<td><?=$user->email?></td>
<td>
    <div class="buttons has-addons">
    <a class="button is-info is-light" 
    href="/admin/users/view?id=<?=$user->id?>">View User</a>
    <a class="button is-warning is-light" 
    href="/admin/users/edit?id=<?=$user->id?>">Edit User</a>
    <a class="button is-danger is-light"
     href="/admin/users/delete?id=<?=$user->id?>">Delete User</a>
</div>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>