$('#btn1').click(function(){
  if(valid_data()==1){
    sendRun(1,0,0,0,0,0,1);
  }
});

$('#btn2').click(function(){
  if(valid_data()==1){
    sendRun(2,0,0,0,0,0,0);
  }
});

$('#btn3').click(function(){
  if(valid_data()==1){
    sendRun(3,0,0,0,0,0,1);
  }
});

$('#btn4').click(function(){
  if(valid_data()==1){
    sendRun(4,0,0,0,0,0,0);
  }
});

$('#btn6').click(function(){
  if(valid_data()==1){
    sendRun(6,0,0,0,0,0,0);
  }
});

$('#btn_out').click(function(){
  if(valid_data()==1){
    $('#out_list').modal('show');
  }
});

$('#btn_gone').click(function(){
  out();
});

$('#btn0').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,0,0,0);
  }
});

$('#btnwd').click(function(){
  if(valid_data()==1){
    sendRun(0,0,1,1,0,0,0);
  }
});

$('#btnwd1').click(function(){
  if(valid_data()==1){
    sendRun(0,0,2,2,0,0,1);
  }
});

$('#btnwd2').click(function(){
  if(valid_data()==1){
    sendRun(0,0,3,3,0,0,0);
  }
});

$('#btnwd3').click(function(){
  if(valid_data()==1){
    sendRun(0,0,4,4,0,0,1);
  }
});

$('#btnwd4').click(function(){
  if(valid_data()==1){
    sendRun(0,0,5,5,0,0,0);
  }
});

$('#btnlb1').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,1,0,1);
  }
});

$('#btnlb2').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,2,0,0);
  }
});

$('#btnlb3').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,3,0,1);
  }
});

$('#btnlb4').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,4,0,0);
  }
});

$('#btn1b').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,0,1,1);
  }
});

$('#btn2b').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,0,2,0);
  }
});

$('#btn3b').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,0,3,1);
  }
});

$('#btn4b').click(function(){
  if(valid_data()==1){
    sendRun(0,0,0,0,0,4,0);
  }
});
