function checkInnings(){
  var overs=document.getElementById('total_overs').value;
  var wicket=document.getElementById('total_wicket').value;
  var current_overs=document.getElementById('txtovers').value;
  var current_wicket=document.getElementById('txt_wicket').value;
  var first_batting=document.getElementById('first_batting').value;
  var matchid=document.getElementById('matchid').value;

  if(first_batting==1){
    if(parseFloat(current_overs) == parseFloat(overs)){
      $.ajax({
        url:"scripts/update_innings.php",
        method:"post",
        data:{
          Match_Id:matchid
        },
        success:function(data){
          location.reload();
        }
      });
    }
  }else{

  }
}
