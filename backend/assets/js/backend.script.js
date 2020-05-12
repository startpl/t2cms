$(document).ready(function(){
    $('a.cache__link-flush, .cache__link-flush > a').click(function(event){
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: $(this).attr('href'),
            success: () => window.location.reload(false)
        });
    });
});