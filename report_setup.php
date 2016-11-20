<?php require "includes/header.php"; ?>

<div class="container">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading">Report Setup</div>
      <div class="panel-body">
        <form>
              <div class="form-group">
                <label for="exampleInputEmail1">From Date</label>
                <input type="date" class="form-control" id="from_date">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">To Date</label>
                <input type="date" class="form-control" id="to_date">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Bus No</label>
                <input type="text" class="form-control" id="busno" placeholder="Bus No">
              </div>
              <button type="button" class="btn btn-primary" id="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
</body>
</html>

<script>
  $('#submit').click(function(){
    var fdate = $('#from_date').val();
    var tdate = $('#to_date').val();
    var _busno = $('#busno').val();
    location.href="report.php?fdate="+fdate+"&tdate="+tdate+"&busno="+_busno;
  });
</script>
