
<?php require "includes/header.php"; ?>
<div class="container">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading">Enter the BusNo</div>
      <div class="panel-body">
        <form>
              <div class="form-group">
                <label for="exampleInputEmail1" >Bus No</label>
                <input type="text" class="form-control" id="busno" placeholder="Bus No">
              </div>
              <div align = "center">
			  <button type="button" class="btn btn-primary" id="submit" >Submit</button>
			  <div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
</body>
</html>
<script src="js/jquery.js"></script>
<script>
  $('#submit').click(function(){
    
    var _busno = $('#busno').val();
    location.href="read.php?busno="+_busno;

  });
</script>
