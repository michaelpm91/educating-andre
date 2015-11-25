$( document ).ready(function() {

    var modal_state = "closed";

    $('#open_submit').click(function(e){
        e.preventDefault();
        toggleModal();
    });

    $('#modal').click(function(e){
        if( e.target == this )
            if(modal_state == "open") toggleModal();
    });

    $('#submit_andreism').click(function(){
        submitAndreism();
    });

    $('#modal_form textarea').on('input', function() {
        if($(this).val().length > 1){
            $('#submit_andreism').removeAttr("disabled");
        }else{
            $('#submit_andreism').attr("disabled", true);
        }
    });

    function toggleModal(){
        if(modal_state == "closed") {
            modal_state = "open"
            $('#modal').fadeIn();
        }else{
            modal_state = "closed"
            $('#modal').fadeOut(function(){
                $('#modal_form textarea').val('');
                $('#modal_form input').val('');
            });
        }
    }

    function submitAndreism(){
        $.post("/andreism", {
            "story" : $('#modal_form textarea').val(),
            "name" : $('#modal_form input').val()
        }, function(){
            toggleModal();
        });
    }

});