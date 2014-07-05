$(function(){

    $('.login').on('click', function(){
            $('.formlogin').show();
            $('.overlay').show();
         });

    $('.signup').on('click', function(){
            $('.formregister').show();
            $('.overlay').show();
         });

    $('.icons img').mouseover(function(){
        $(this).addClass('animated pulse');
    }).mouseleave(function(){
        $(this).removeClass('animated pulse');
    });

    $('.arrow').click(function(){

        $('html, body').animate({
            scrollTop: $('.second').offset().top
        }, 1000);

     });  

     $('.arrow').mouseover(function(){
        $(this).addClass('animated flash');
    }).mouseleave(function(){
        $(this).removeClass('animated flash');
    });

    $('.iconC img').mouseover(function(){
        $(this).addClass('animated flash');  
     }).mouseleave(function(){
        $(this).removeClass('animated flash');
     });    

     $('.newrecipe').on('click', function(){
        $('.mainCreate').show();
        $('.overlay').show();
        $('.createrecipe').addClass('animated slideInDown');
            console.log("slideInDown");
     });

        
// CS VALIDATION*********

     function checkLength(text, min, max){
        if (text == undefined) {
            return false; 
        }
        min = min || 2;
        max = max || 50;
        if (text.length < min || text.length > max){
            return false;
        }
        return true;
    }

     function validateRegister(form, evt){
        var firstName = $("[name='firstName']").val();
        var lastName = $("[name='lastName']").val();
        var email = $("[name='email']").val();
        var password = $("[name='password']").val();
        var errors = [];

        if(!checkLength(firstName)){
            errors.push("You must enter a first name.");
        }
        if(!checkLength(lastName)){
            errors.push("You must enter a last name.");
        }
        if(!checkLength(email)){
            errors.push("You must enter an email.");
        }
        if(!checkLength(password)){
            errors.push("You must enter a password.");
        }

        if(errors.length > 0){
            reportErrors(errors);
            evt.preventDefault();
            return false;
        }
        return true;

        function reportErrors(errors){
            var msg = "There were some problems with your registration...\n";
            var numError;
            for(var i=0; i<errors.length; i++){
                numError = i + 1;
                msg +="\n" + numError + "." + errors[i];
            }
            alert(msg);
        }
    }

    $(".formregister").on('submit', function(evt){
        var valid= validateRegister(this, evt);
         if(!valid){
            return false;
        }
    });

//----------------Begin Log In Validation-------------    
function validateLogin(login, evt){
        var email  = $("[name='email']").val();
        var password = $("[name='password']").val();
        var errors = [];

        if(!checkLength(email)){
            errors.push("You must enter an email.");
        }
        if(!checkLength(password)){
            errors.push("You must enter a password.");
        }

        if(errors.length > 0){
            reportErrors(errors);
            evt.preventDefault();
            return false;
        }
        return true;

        function reportErrors(errors){
            var msg = "There were some problems with your log in...\n";
            var numError;
            for(var i=0; i<errors.length; i++){
                numError = i + 1;
                msg +="\n" + numError + "." + errors[i];
            }
            alert(msg);
        }
    }

    $(".formlogin").on('submit', function(evt){
        var valid = validateLogin(this, evt);

        if(!valid){
            return false;
        }

    });
});

