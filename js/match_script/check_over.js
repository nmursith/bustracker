function checkOver(){
  var over=document.getElementById('txtovers').value;
  var matchid=document.getElementById('matchid').value;
  if(over % 1==0){
    $.ajax({
      url:"scripts/end_over.php",
      method:"post",
      data:{Match_Id:matchid},
      success:function(data){
        RefreshData(0);
        $('#bowlers').modal('show');
      }
    });
  }
  return 1;
}
