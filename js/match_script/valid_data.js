function valid_data(){
  var bat1=document.getElementById('txt_bat1').value;
  var bat2=document.getElementById('txt_bat2').value;
  var bowler=document.getElementById('txt_bowler').value;

  var strike1=document.getElementById('ckb1').checked;
  var strike2=document.getElementById('ckb2').checked;

  if(bat1=="0"){
    $('#batsmans1').modal('show');
    return 0;
  }

  if(bat2=="0"){
    $('#batsmans2').modal('show');
    return 0;
  }

  if(bowler=="0"){
    $('#bowlers').modal('show');
    return 0;
  }

  if(strike1==false && strike2==false){
    alert('Please select the strike....');
    return 0;
  }
  return 1;
}
