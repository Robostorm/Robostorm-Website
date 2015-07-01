<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes.php'; ?>

    <title>Aquabot</title>
</head>
<body>

<?php require 'header.php'; ?>

<div class="container-fluid" id="body">
    <div class="row">
        <div class="col-md-8">
            <h2>Aquabot</h2>

            <p>
                Aquabot Description Here!!
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
