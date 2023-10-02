<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <table class="table is-striped is-fullwidth">
        <tbody>
            <tr>
                <th>Id</th>
                <th><?=$user->id?></th>
            <tr>
                <th>Email</th>
                <th><?=$user->email?></th>
            </tr>
            <tr>
                <th>Content</th>
                <th><?=$user->password?></th>
            </tr>

        </tbody>
    </table>


</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>