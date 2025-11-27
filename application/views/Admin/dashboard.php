<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>

<body>
    <div class="container mb-3" style="margin-top:50px">
        <h1>welcome admin *,_,* </h1>
        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Article Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($article)): ?>
                        <?php foreach ($article as $art): ?>
                            <tr>
                                <td><?php echo $art->id; ?></td>
                                <td><?php echo $art->article_title; ?></td>
                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3">No dat found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<?php include('footer.php'); ?>