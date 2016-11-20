function update_strike(){
        var overs=document.getElementById('txtovers').value;
        if(overs !=0){
            var matchid=document.getElementById('matchid').value;
            var str=document.getElementById('ckb1').checked;
            var striker;
            var nonstriker;
            if(str){
              striker=document.getElementById('txt_bat2').value;
              nonstriker=document.getElementById('txt_bat1').value;
            }else{
              striker=document.getElementById('txt_bat1').value;
              nonstriker=document.getElementById('txt_bat2').value;
            }
            $.ajax({
              url:"scripts/update_striker.php",
              method:"post",
              data:{
                Match_Id:matchid,
                Striker:striker,
                Non_Striker:nonstriker
              },
              success:function(data){
                RefreshData(0);
              }
            });
      }
}
