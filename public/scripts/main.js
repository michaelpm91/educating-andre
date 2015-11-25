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

    function toggleModal(){
        if(modal_state == "closed") {
            modal_state = "open"
            $('#modal').fadeIn();
        }else{
            modal_state = "closed"
            $('#modal').fadeOut();
        }
    }

    function submitAndreism(){
        alert('Andreism submitted');
    }

});