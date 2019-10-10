$(function(){

  //backgroundフェードイン
  $('.top-section').fadeIn(1000);

  //titleフェードイン
  $('.title-fadeIn').fadeIn(4000);


  // SNSボタン
  $('.social-icon').hover(
    function(){
      $(this).children('span').animate({
        'font-size':'30px'
      }, 300);
    },
    function(){
      $(this).children('span').animate({
        'font-size':'24px'
      }, 300);
    }
  );

  // トップへ戻るボタン
  $('#top-btn').click(function(){
    $('html,body').animate({
      'scrollTop': 0
    }, 'slow');
  });

  $('header a').click(function(){
    var id=$(this).attr('href');
    var position=$(id).offset().top;

    $('html,body').animate({
      'scrollTop':position
    },500);

  });


  //エラーメッセージ
  $('.btn btn-contact').click(function(){
    if ($('.contact-name').val()==='' || $('.contact-email').val()==='') {
      $('.error-message').css('display','block');
    }
  })

});

for (var i = 0; i <=4; i++) {
  for (var j = 0; j<=4 ;j++) {
    $(".table-row"+i+"1"+j).hide();
    $(".table-cell"+i+"1"+j).hide();
  }
}

var h = [0,0,0,0,1];

$("#hide0").click(function() {
 //$(".table-row1").css("height",$(".table-row1").height()+"px");
 for (var i = 0; i <=4; i++) {
   if($(".table-row"+i+"10").css('display') == 'none'&& $(".table-row"+"410").css('display') == 'none' && h[i]==1)
   {
     $(".table-row"+i+"10").show();
     $(".table-cell"+i+"10").slideToggle(300);

   }
   else if (h[i]==1)
   {
     $(".table-cell"+i+"10").slideToggle(300);
     $(".table-row"+i+"10").hide(280);
   }
 }
});

 $("#hide1").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"11").css('display') == 'none'&& $(".table-row"+"411").css('display') == 'none' && h[i]==1)
    {
      $(".table-row"+i+"11").show();
      $(".table-cell"+i+"11").slideToggle(800);
    }
    else if (h[i]==1)
    {
      $(".table-cell"+i+"11").slideToggle(800);
      $(".table-row"+i+"11").hide(800);
    }
  }
 });

 $("#hide2").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"12").css('display') == 'none'&& $(".table-row"+"412").css('display') == 'none' && h[i]==1)
    {
      $(".table-row"+i+"12").show();
      $(".table-cell"+i+"12").slideToggle(300);
    }
    else if (h[i]==1)
    {
      $(".table-cell"+i+"12").slideToggle(300);
      $(".table-row"+i+"12").hide(300);
    }
  }
 });

 $("#hide3").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"13").css('display') == 'none'&& $(".table-row"+"413").css('display') == 'none' && h[i]==1)
    {
      $(".table-row"+i+"13").show();
      $(".table-cell"+i+"13").slideToggle(300);
    }
    else if (h[i]==1)
    {
      $(".table-cell"+i+"13").slideToggle(300);
      $(".table-row"+i+"13").hide(300);
    }
  }
 });

 $("#hide4").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"14").css('display') == 'none'&& $(".table-row"+"414").css('display') == 'none' && h[i]==1)
    {
      $(".table-row"+i+"14").show();
      $(".table-cell"+i+"14").slideToggle(300);
    }
    else if (h[i]==1)
    {
      $(".table-cell"+i+"14").slideToggle(300);
      $(".table-row"+i+"14").hide(300);
    }
  }
 });

  $("#click1").click(function() {
    if (h[0] == 0){
      h[0]=1;
      $("#click1").css('background-color','#5983ff');
      $("#click1").css('color','#ffffff');
      for (var i = 0; i <=4; i++) {
        if($(".table-row"+"01"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
          $(".table-row"+"01"+i).show();
          $(".table-cell"+"01"+i).slideToggle(300);
        }
      }
      }else{
        h[0]=0;
        $("#click1").css('background-color','#f4f4f4');
        $("#click1").css('color','#5983ff');
        for (var j = 0; j <=4; j++) {
          if($(".table-row"+"01"+i).css('display') != 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
            $(".table-cell"+"01"+j).slideToggle(300);
            $(".table-row"+"01"+j).hide(300);
          }
          $(".table-cell"+"01"+j).hide();
        }
      }
  });

  $("#click2").click(function() {
    if (h[1] == 0){
      h[1]=1;
      $("#click2").css('background-color','#5983ff');
      $("#click2").css('color','#ffffff');
      for (var i = 0; i <=4; i++) {
        if($(".table-row"+"11"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
          $(".table-row"+"11"+i).show();
          $(".table-cell"+"11"+i).slideToggle(300);
        }
      }
      }else{
        h[1]=0;
        $("#click2").css('background-color','#f4f4f4');
        $("#click2").css('color','#5983ff');
        for (var j = 0; j <=4; j++) {
          if($(".table-row"+"11"+i).css('display') != 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
            $(".table-cell"+"11"+j).slideToggle(300);
            $(".table-row"+"11"+j).hide(300);
          }
          $(".table-cell"+"11"+j).hide();
        }
      }
  });

  $("#click3").click(function() {
    if (h[2] == 0){
      h[2]=1;
      $("#click3").css('background-color','#5983ff');
      $("#click3").css('color','#ffffff');
      for (var i = 0; i <=4; i++) {
        if($(".table-row"+"21"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
          $(".table-row"+"21"+i).show();
          $(".table-cell"+"21"+i).slideToggle(300);
        }
      }
      }else{
        h[2]=0;
        $("#click3").css('background-color','#f4f4f4');
        $("#click3").css('color','#5983ff');
        for (var j = 0; j <=4; j++) {
          if($(".table-row"+"21"+i).css('display') != 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
            $(".table-cell"+"21"+j).slideToggle(300);
            $(".table-row"+"21"+j).hide(300);
          }
          $(".table-cell"+"21"+j).hide();
        }
      }
  });

  $("#click4").click(function() {
    if (h[3] == 0){
      h[3]=1;
      $("#click4").css('background-color','#5983ff');
      $("#click4").css('color','#ffffff');
      for (var i = 0; i <=4; i++) {
        if($(".table-row"+"31"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
          $(".table-row"+"31"+i).show();
          $(".table-cell"+"31"+i).slideToggle(300);
        }
      }
      }else{
        h[3]=0;
        $("#click4").css('background-color','#f4f4f4');
        $("#click4").css('color','#5983ff');
        for (var j = 0; j <=4; j++) {
          if($(".table-row"+"31"+i).css('display') != 'none' && $(".table-row"+"41"+i).css('display') != 'none'){
            $(".table-cell"+"31"+j).slideToggle(300);
            $(".table-row"+"31"+j).hide(300);
          }
          $(".table-cell"+"31"+j).hide();
        }
      }
  });
 $("#hide0").hover(function(){
   $(".fukidashi0").show();
 }, function(){
   $(".fukidashi0").hide(300);
 });

 $("#hide1").hover(function(){
   $(".fukidashi1").show();
 }, function(){
   $(".fukidashi1").hide(300);
 });

 $("#hide2").hover(function(){
   $(".fukidashi2").show();
 }, function(){
   $(".fukidashi2").hide(300);
 });

 $("#hide4").hover(function(){
   $(".fukidashi4").show();
 }, function(){
   $(".fukidashi4").hide(300);
 });

$(".btn-contact2").click(function() {
  if ($(".data").css('display') != 'none') {
    $(".data").animate({"left": "+=65%"}, 100);
    $(".data").hide(50);
    $(".data").animate({"left": "-=130%"}, 600);
}
$(".data").show(0);
$(".data").animate({"left": "+=65%"}, 400);
});
