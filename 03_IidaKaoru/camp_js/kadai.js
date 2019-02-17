//選択した画像をプレビュー表示する

function imgPreView(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    var preview = document.getElementById("preview");
    var previewImage = document.getElementById("previewImage");
     
    if(previewImage != null)
      preview.removeChild(previewImage);
   
    reader.onload = function(event) {
       var img = document.createElement("img");
       img.setAttribute("src", reader.result);
       img.setAttribute("id", "previewImage");
       preview.appendChild(img);
       
    };
   
    reader.readAsDataURL(file);
  }


//index-プレビュー画面

$('.filelabel').on('click', function(){
  $('.box-preview').fadeIn(4000);

})

//index-プレビューボタン

  $(function () {
    setTimeout('anime2()'); 
});
function anime2(){
$('#submitbtn')
  .animate({'opacity':'1'},500)
  .animate({'opacity':'0.7'},500);
 setTimeout("anime2()", 1000);
}

//select-お店一覧

$(function() {
  $('.box-shop img').hide().fadeIn(3500); 
});
