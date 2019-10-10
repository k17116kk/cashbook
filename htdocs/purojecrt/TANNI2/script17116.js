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
  }
}

$("#hide0").click(function() {
 //$(".table-row1").css("height",$(".table-row1").height()+"px");
 for (var i = 0; i <=4; i++) {
   if($(".table-row"+i+"10").css('display') == 'none'&& $(".table-row"+"410").css('display') == 'none')
   {
     $(".table-row"+i+"10").show();

   }
   else
   {
     $(".table-row"+i+"10").hide();
   }
 }
});

 $("#hide1").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"11").css('display') == 'none'&& $(".table-row"+"411").css('display') == 'none')
    {
      $(".table-row"+i+"11").show();
    }
    else
    {
      $(".table-row"+i+"11").hide();
    }
  }
 });

 $("#hide2").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"12").css('display') == 'none'&& $(".table-row"+"412").css('display') == 'none')
    {
      $(".table-row"+i+"12").show();
    }
    else
    {
      $(".table-row"+i+"12").hide();
    }
  }
 });

 $("#hide3").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"13").css('display') == 'none'&& $(".table-row"+"413").css('display') == 'none')
    {
      $(".table-row"+i+"13").show();
    }
    else
    {
      $(".table-row"+i+"13").hide();
    }
  }
 });

 $("#hide4").click(function() {
  //$(".table-row1").css("height",$(".table-row1").height()+"px");
  for (var i = 0; i <=4; i++) {
    if($(".table-row"+i+"14").css('display') == 'none'&& $(".table-row"+"414").css('display') == 'none')
    {
      $(".table-row"+i+"14").show();
    }
    else
    {
      $(".table-row"+i+"14").hide();
    }
  }
 });

  $("#click1").click(function() {
    for (var i = 0; i <=4; i++) {
      if($(".table-row"+"01"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none')
      {
        $(".table-row"+"01"+i).show();

      }
      else
      {
        $(".table-row"+"01"+i).hide();

      }
    }
    var rgb = $('#click1').css('background-color');
    if (console.log(rgb.match(/^rgb\((0+),\s*(0+),\s*(0+)\)$/)) == '#f4f4f4'){
    //  $("#click1").css('background-color','#5983ff');
    //  $("#click1").css('color','#ffffff');
    } else {
    //  $("#click1").css('background-color','#f4f4f4');
    //  $("#click1").css('color','#000000');
    }
  });

  $("#click2").click(function() {
    for (var i = 0; i <=4; i++) {
      if($(".table-row"+"11"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none')
      {
        $(".table-row"+"11"+i).show();
      }
      else
      {
        $(".table-row"+"11"+i).hide();
      }
    }
  });

  $("#click3").click(function() {
    for (var i = 0; i <=4; i++) {
      if($(".table-row"+"21"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none')
      {
        $(".table-row"+"21"+i).show();
      }
      else
      {
        $(".table-row"+"21"+i).hide();
      }
    }
  });

  $("#click4").click(function() {
    for (var i = 0; i <=4; i++) {
      if($(".table-row"+"31"+i).css('display') == 'none' && $(".table-row"+"41"+i).css('display') != 'none')
      {
        $(".table-row"+"31"+i).show();
      }
      else
      {
        $(".table-row"+"31"+i).hide();
      }
    }
  });
