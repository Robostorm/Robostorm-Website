<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes.php'; ?>

    <title>Maze Bots</title>
</head>
<body>

<?php require 'header.php'; ?>

<div class="container-fluid" id="body">
    <div class="row">
        <div class="col-md-8">
            <h2>Mazebots</h2>

            <p>
                Mazebots Discription Here!
            </p>
        </div>
    </div>
</div>
<?php include 'js/active.php' ?>
<script type="text/javascript">
    $("document").ready(function () {
        $('a[href*="projects.php"]').addClass('active');
    });
</script>
</body>
</html>
