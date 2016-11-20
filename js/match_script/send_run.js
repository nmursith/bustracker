
function sendRun(_score, _is_out, _extrascore, _wd, _lb, _b, str_rotate){
  var matchid=document.getElementById('matchid').value;
  var batting=document.getElementById('batting').value;
  var bowling=document.getElementById('bowling').value;

  var str=document.getElementById('ckb1').checked;
  var striker;
  var nonstriker;

  if(str){
    striker=document.getElementById('txt_bat1').value;
    nonstriker=document.getElementById('txt_bat2').value;
  }else{
    striker=document.getElementById('txt_bat2').value;
    nonstriker=document.getElementById('txt_bat1').value;
  }

  var score=_score;
  var bowler=document.getElementById('txt_bowler').value;
  var is_out=_is_out;
  var noball=document.getElementById('noball').checked;
  var extrascore=_extrascore;
  var wide=_wd;
  var legbye=_lb;
  var bye=_b;
  var strike_rotate=str_rotate;

  $.ajax({
    url:"scripts/update_score.php",
    method:"post",
    data:{
      Match_Id:matchid,
      Batting:batting,
      Bowling:bowling,
      Striker:striker,
      NonStriker:nonstriker,
      Bowler:bowler,
      Score:score,
      Is_Out:is_out,
      NoBall:noball,
      ExtraScore:extrascore,
      Wide:wide,
      LegBye:legbye,
      Bye:bye,
      Strike_Rotate:strike_rotate
    },
    success:function(data){
      if(extrascore > 0){
        RefreshData(0);
      }else{
        RefreshData(1);
      }
      RefreshOver();
    }
  });


}

function RefreshOver(){
  var matchid=document.getElementById('matchid').value;
  var batting=document.getElementById('batting').value;

  $.ajax({
    url:"scripts/update_over.php",
    method:"post",
    data:{
      Match_Id:matchid,
      Batting:batting
    },
    success:function(data){
      RefreshTimeLine();
    }
  });
}

function RefreshTimeLine(){
  var matchid=document.getElementById('matchid').value;
  $.ajax({
    url:"scripts/timeline.php",
    method:"post",
    data:{Match_Id:matchid},
    success:function(data){
      $('#timeline').html(data);
    }
  });
}
