<style>
    body {
       padding-top: 60px; /* When using the navbar-top-fixed */
    }
    #patient_detail_form{
       margin: 0;
    }
</style>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/utility.js"></script>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="index.php">戒酒小幫手2正式網站</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li id="daily"><a href="index.php">Daily</a></li>
          <li id="record"><a href="record.php">Records</a></li>
          <li id="skip"><a href="skip.php">Skipped</a></li>
          <li id="manage"><a href="manage.php">Manage</a></li>
          <li id="manage"><a href="score.php">score</a></li>
          <li id="logout"><a href="logout.php">Log out</a></li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

<form  id="patient_detail_form" action="patient_detail.php" method="post">
   <input id="input_uid" type="hidden" name="uid" value="">
</form>
