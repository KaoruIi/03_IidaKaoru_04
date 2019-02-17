
//div#exの最初の表示時にフェードインから表示 ※4秒
//div#exを作成、文字列”<p>かきくけこ</p>”を挿入

$(function() {
  $('#kk').hide().fadeIn(4000); 
});

//div#exの中、行頭に”<p>あいうえお</p>”を挿入
$(function(){
    $("#aa").css({opacity:'0'});
    setTimeout(function(){
        $("#aa").stop().animate({opacity:'1'},4000);
    },4000);
});

//div#exの中、末尾に”<p>さしすせそ</p>”を挿入
$(function(){
    $("#ss").css({opacity:'0'});
    setTimeout(function(){
        $("#ss").stop().animate({opacity:'1'},4000);
    },8000);
});

//div#exの背景を黒、文字色を白に変更

$(document).ready(function(){
    $('#btn-black').click(function() {
        $('#ex').css('background', '#000000');
        $('p').css('color', '#ffffff');
    });
});

//難問)div#ex内の偶数行だけ背景白にする

$(document).ready(function(){
    $('#btn-white').click(function() {
        // $('table.ex-table tr:even').css('background-color', '#d00');   
        $('#ex p:nth-child(odd)').css('color','#000000');
        $('#ex p:nth-child(odd)').css('background-color','#ffffff');
    });
});

