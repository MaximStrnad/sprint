loaded = false;
$(document).ready( function () {
    var request = window.location.pathname !== "/" ? window.location.pathname.replace('/','') : "home";
    getContent(request);
    setPageRedirectWatcher();
});
function setPageRedirectWatcher (container) {
    if(!container){
    $(".page-redirect").on('click', function () {
        getContent($(this).children().data("page-redirect"));
    });
    } else if($("."+container).find(".page-redirect").length !== 0){
        $("."+container).find(".page-redirect").on('click', function () {
            getContent($(this).children().data("page-redirect"));
        });
    }
}
function getContent (redirect) {
    page = redirect && redirect !== page ? redirect : page;
    var path = "/app/src/loader.php";

    if(page !== '' && (!loaded || redirect)) {
        page = page == "home" ? "homepage" : page;
        $.ajax({url: path,
            type: 'post',
            data: {load: page},
            success: function(result){
                $("#app").html(result);
                $("#app-wrapper").attr('class',page);
                loaded = true;
                setPageRedirectWatcher(page);
                renderNavbarStatus(page);
        }});
    }
}
function renderNavbarStatus (currPage) {
    $(".page-redirect").each(function() {
        if($(this).children().data("page-redirect") == currPage){
            $(this).addClass("active");
        } else if($(this).hasClass("active")){
            $(this).removeClass("active");
        }
    });
}