<?php
    $active = 'class="active"';
    $projects = array_fill(0, 6, '');;
    $page = \basename($_SERVER['PHP_SELF']);
    
    if($page == 'projects.php' || $page == 'aquabot.php' || $page == 'battlebots.php' || 
            $page == 'mazebots.php' || $page == '3dprinter.php.php' || $page == 'arcade.php') {
        
        $projects[0] = $active;
    }
    if($page == 'aquabot.php') {
        $projects[1] = $active;
    } else if($page == 'battlebots.php') {
        $projects[2] = $active;
    } else if($page == 'mazebots.php') {
        $projects[3] = $active;
    } else if($page == '3dprinter.php') {
        $projects[4] = $active;
    } else if($page == 'arcade.php') {
        $projects[5] = $active;
    }
?>
<!-- -*-HTML-*- -->
<nav class="navbar navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img alt="" src="assets/banner.png">
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'class="active"';} ?>><a href="index.php">Home</a></li>
        <li <?php echo $projects[0] ?>>
	  <a href="projects.php" class="dropdown-toggle" data-toggle="dropdown" role="botton" aria-expanded="false">Projects <span class="caret"></span></a>
	  <ul class="dropdown-menu" role="menu">
	    <li <?php echo $projects[1] ?>><a href="aquabot.php">Aquabot</a></li>
	    <li <?php echo $projects[2] ?>><a href="battlebots.php">BattleBots</a></li>
	    <li <?php echo $projects[3] ?>><a href="mazebots.php">MazeBots</a></li>
	    <li <?php echo $projects[4] ?>><a href="3dprinter.php">3d Printer</a></li>
	    <li <?php echo $projects[5] ?>><a href="arcade.php">Arcade Machine</a></li>
	  </ul>
	</li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'members.php'){echo 'class="active"';} ?>><a href="members.php">Members</a></li>
	<li <?php if(basename($_SERVER['PHP_SELF']) == 'documents.php'){echo 'class="active"';} ?>><a href="documents.php">Documents</a></li>
	<li <?php if(basename($_SERVER['PHP_SELF']) == 'events.php'){echo 'class="active"';} ?>><a href="events.php">Events</a></li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){echo 'class="active"';} ?>><a href="contact.php">Contact</a></li>
      </ul>      
    </div>
  </div>
</nav>