<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <a href="/admin/articles/new" class="button is-primary">New Article</a>
    <table class="table is-striped is-fullwidth">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?= $article->id ?></td>
                    <td><?= $article->title ?></td>
                    <td>
                        <div class="buttons has-addons">
                            <a class="button is-info">View</a>
                            <a class="button is-warning">Edit</a>
                            <a class="button is-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>




</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>