<h1>Newsy</h1>

<div class="well">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newss as $news): ?>
                <tr>
                    <td><a href="<?php echo url_for('default/edit?id=' . $news->getId()) ?>"><?php echo $news->getId() ?></a></td>
                    <td><a href="<?php echo url_for('default/edit?id=' . $news->getId()) ?>"><?php echo $news->getTitle() ?></a></td>
                    <td><a href="<?php echo url_for('default/edit?id=' . $news->getId()) ?>"><?php echo $news->getCreatedAt() ?></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a class="btn btn-large btn-primary" href="<?php echo url_for('default/new') ?>">New</a>

</div>