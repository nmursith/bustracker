function check_bowler(_bowlerid){
  var matchid=document.getElementById('matchid').value;
  var bowlerid=_bowlerid;
  $.ajax({
    url:"scripts/check_bowler.php",
    method:"post",
    data:{
      Match_Id:matchid,
      Bowler_Id:bowlerid
    },
    success:function(data){
      if(data==1){
        update_bowler(bowlerid);
      }else{
        alert("Can't Select this bowler...");
      }
    }
  });
}
