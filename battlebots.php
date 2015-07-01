<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes.php'; ?>

    <title>Battlebots</title>
</head>
<body>

<?php require 'header.php'; ?>

<div class="container-fluid" id="body">
    <div class="row">
        <div class="col-md-8">
            <h2>Battlebots</h2>

            <p>
                For 2015 battlebots info, go to <a href="http://robostorm.org/battlebots/">robostorm.org/battlebots</a>
            </p>
        </div>
    </div>
</div>
<?php include 'js/active.php' ?>
<script type="text/javascript">
    $("document").ready(function(){
        $('a[href*="projects.php"]').addClass('active');
    });
</script>
</body>
</html>
