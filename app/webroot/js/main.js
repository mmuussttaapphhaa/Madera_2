$(document).ready(function(){
    $(document).on('click','a#modal',function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $.get(href,{},function(d){
            $("#modal-body").html(d);
        })
        $('#myModal').show();
    })

    $(document).on('click','#closeModal',function(e){
        e.preventDefault();
        $('#myModal').hide();
    })
})