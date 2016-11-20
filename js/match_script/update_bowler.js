function update_bowler(_bowlerid){
  var matchid=document.getElementById('matchid').value;
  var bowlerid=_bowlerid;
    $.ajax({
      url:"scripts/update_bowler.php",
      method:"post",
      data:{
        Match_Id:matchid,
        Bowler_Id:bowlerid
      },
      success:function(data){
        update_strike();
        RefreshData(0);
        $('#bowlers').modal('hide');
      }
    });
}
