table = "<table>"
/*
foreach uzivatel as user 
    text += <td> user.name </td>
*/
text = "<td></td>"
$(".tabulka").innerHtml = table+text;
window.onload(function(){
    $.fn.preload = function() {
        this.each(function(){
            $('<img/>')[0].src = this;
        });
    }
    $(['img1.jpg','img2.jpg','img3.jpg']).preload();
});
