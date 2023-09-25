<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <table class="table is-striped is-fullwidth">
        <tbody>
            <tr>
                <th>Id</th>
                <th><?=$article->id?></th>
            <tr>
                <th>title</th>
                <th><?=$article->title?></th>
            </tr>
            <tr>
                <th>Content</th>
                <th><?=$article->body?></th>
            </tr>

        </tbody>
    </table>


</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>