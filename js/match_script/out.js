function out(){
  var matchid=document.getElementById('matchid').value;
  var batsman;
  if(document.getElementById('ckb1').checked){
    batsman=document.getElementById('txt_bat1').value;
  }else{
    batsman=document.getElementById('txt_bat2').value;
  }
  var howout=document.getElementById('howout').value;
  var fielder;
  if(howout==5 || howout==6){
    fielder=document.getElementById('fielder').value;
  }else{
    fielder=0;
  }
  var bowler=document.getElementById('txt_bowler').value;
  if(howout==6){
    bowler=0;
  }

  $.ajax({
    url:"scripts/out.php",
    method:"post",
    data:{
      Match_Id:matchid,
      Batsman:batsman,
      Howout:howout,
      Fielder:fielder,
      Bowler:bowler
    },
    success:function(data){
      sendRun(0,1,0,0,0,0,0);
      $('#out_list').modal('hide');
    }
  });
}
