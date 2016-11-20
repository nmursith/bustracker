<?php require "includes/header.php"; ?>

    <div class="container">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="panel panel-success">
          <div class="panel-heading">Tasks</div>
          <div class="panel-body">
                  <button style="width:100%;" type="button" class="btn btn-primary" id="livemap">Live Map</button><br /><br />
                  <button style="width:100%;" type="button" class="btn btn-primary" id="report">Tracking Report</button><br /><br />
                  <button style="width:100%;" type="button" class="btn btn-danger" id="signout">Sign Out</button><br />
          </div>
        </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </body>
</html>

<script>
    $('#livemap').click(function(){
      location.href="busno.php";
    });

    $('#report').click(function(){
      location.href="report_setup.php";
    });
</script>
