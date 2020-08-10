$(document).ready(function(){

    var barraNome = $('#visitName').val();
    var btnSubmit = $('#visitSubmit').val();

    var btnCV = $('#downCV');
    var arrow = $('.arrow');
    var linkCV = $('.cv');
    var correctIcon = $('.correct');
    var donwloadDiv = $('.download');

    btnCV.click(function() {

        arrow.animate({
            top: 80 + 'px'
        }, 500);

        linkCV.animate({
            top: -300 + 'px'
        }, 500);   

        btnCV.animate({
            width: 100 + 'px'
        }, 500);

        donwloadDiv.animate({
            backgroundSize: 100 + '%'
        }, 100); 

        correctIcon.animate({
            top: '15px'
        }, 500);
  
    });

    //#region REQUISIÇÕES DE PÁGINAS

    function requestPage(pageName){

        $.ajax({

            // Confs
            type: 'POST',
            dataType: 'html',
            url: 'pages/' + pageName + '.php',
            beforeSend: function(){
                $('#session').html("Carregando...");
            },
            success: function(msg){
                $('#session').html(msg);
            },
            error: function(msg){
                $('#session').html("Página Inexistente!");
            }
        });

    }

    requestPage('home');

    $('#btn-home').click(function(){
        requestPage('home');
    });

    $('#btn-about').click(function(){
        requestPage('about');
    });

    $('#btn-skills').click(function(){
        requestPage('skills');
    });

    $('#btn-studies').click(function(){
        requestPage('studies');
    });

    $('#btn-works').click(function(){
        requestPage('works');
    });

    $('#btn-contact').click(function(){
        requestPage('contact');
    });

    //#endregion

    //#region WORKS - PAGE HOME

        var jobs = $('.work');
        var currentWork = 0;        
        var job; 

        changeWork();

        function changeWork() {    
            job = $('.work').eq(currentWork);  
            
            jobs.css('display', 'none');      
            job.css('display', 'initial');   

            job.animate({
                fontSize: 20,
                opacity: 1
            }, 300);

            setInterval(function(){         
                job.animate({
                    fontSize: 10,
                    opacity: 0
                }, 300);   
            }, 2600);

            return currentWork;
        }

        currentWork = changeWork();

        console.log(currentWork);

        setInterval(function(){   
                        
            currentWork++;
                    
            if(currentWork > jobs.length)
            {
                currentWork = 0;
                changeWork();     
            } else{
                changeWork(); 
            }
                
        }, 3000); 

    //#endregion

});