function update_batsman(_batsmanid){
  var matchid=document.getElementById('matchid').value;
  var batsman=_batsmanid;
  $.ajax({
    url:"scripts/update_batsman.php",
    method:"post",
    data:{
      Match_Id:matchid,
      BatsmanId:batsman
    },
    success:function(data){
      $('#batsmans1').modal('hide');
      location.reload();
    }
  });
}
