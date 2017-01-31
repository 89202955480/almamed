$(function(){
 $('.cron_block').find('.cron_gen_button').click(function(){
  var hours = $(this).parent().find('.hours').val();
  var minutes = $(this).parent().find('.minutes').val();
  hours = parseInt(hours);
  minutes = parseInt(minutes);
  if((hours >=0)&&(hours<=23)&&(minutes>=0)&&(minutes<=59))
  {
   var str='';
   str+=minutes+' '+hours+' '+'* * * php ';
   str+=$('.cron_block').find('.cmd_path').text();
   if($(this).parent().parent().find('.cron_result').length == 0)
   {
    $(this).parent().parent().append('<div class="cron_result"><h3>Строка для CRON</h3><p>'+str+'</p></div>');
   }else{
    $(this).parent().parent().find('.cron_result').text('');
	$(this).parent().parent().find('.cron_result').append('<h3>Строка для CRON</h3><p>'+str+'</p>');
   }
   
  }else{
   alert('Некорректный ввод данных');
   return false;
  }
 });
});