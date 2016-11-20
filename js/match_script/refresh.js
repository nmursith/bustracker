function RefreshData(overcheck){
  var matchid=document.getElementById('matchid').value;
    $.ajax({
      url:"scripts/receive_score.php",
      method:"post",
      data:{match_id:matchid},
      success:function(data){
        $('#matchview').html(data);
        if(document.getElementById('txt_bat1').value=="0"){
            $('#batsmans1').modal('show');
            return;
        }
        if(document.getElementById('txt_bat2').value=="0"){
            $('#batsmans2').modal('show');
            return;
        }
        if(overcheck==1){
          checkInnings();
          checkOver();
        }
      }
    });
}
