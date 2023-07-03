$(function(){

    /* 
       Clicar e ir para a div de contato com base no atributo goto 
    */
    var directory = '/'

    $('[goto=contato]').click(function(){
        location.href=directory+'?contato';
        return false;
    })

    checkUrl();

    function checkUrl(){
        var url = location.href.split('/');
        var curPage = url[url.length-1].split('?');

        if(curPage[1] != undefined && curPage[1] == 'contato'){
            $('header nav a').css('color','black');
            /* $('footer nav a').css('color','black'); */
            $('[goto=contato]').css('color','#555baa');
            $('html,body').animate({'scrollTop':$('#contato').offset().top});
        }
    }
    
})