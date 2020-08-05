$(document).ready(function(){

    var barraNome = $('#visitName').val();
    var btnSubmit = $('#visitSubmit').val();

    btnSubmit.click(function(){
        alert("FOI");
        if(barraNome.length >= 2)
        {
            btnSubmit.prop( "disabled", true );
        }
    });
    

});