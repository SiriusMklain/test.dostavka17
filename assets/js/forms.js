

function showFormAdmin() {
 var modal = document.getElementsByClassName('modalFormAdmin');
 var shadow = document.getElementsByClassName('shadow');
 modal[0].style.display = 'block';
 shadow[0].style.display = 'block';
}

function showFormDostavka() {
 var modal = document.getElementsByClassName('modalFormDost');
 var shadow = document.getElementsByClassName('shadow');
 modal[0].style.display = 'block';
 shadow[0].style.display = 'block';
}

function closeModal() {
 var modal = document.getElementsByClassName('modalFormAdmin');
 var shadow = document.getElementsByClassName('shadow');
 if (modal[0].style.display == "block") {
        modal[0].style.display = "none";
        shadow[0].style.display = 'none';
 }
}

function closeModalDost() {
 var modal = document.getElementsByClassName('modalFormDost');
 var shadow = document.getElementsByClassName('shadow');
 if (modal[0].style.display == "block") {
        modal[0].style.display = "none";
        shadow[0].style.display = 'none';
 }
}
$('document').ready(function(){
    $('#agree_ment').on('click', function(){
        console.log(1);
        if ($("#agreement").prop('checked') == false) {
            $("#agreement").prop('checked', true);
            $("#submit_dost").prop('disabled', false);
        } else if ($("#agreement").prop('checked') == true) {
            $("#agreement").prop('checked', false);
            $("#submit_dost").prop('disabled', true);
        }
    });
    
    $('#agree_ment1').on('click', function(){
        console.log(1);
        if ($("#agreement1").prop('checked') == false) {
            $("#agreement1").prop('checked', true);
            $("#submit").prop('disabled', false);
        } else if ($("#agreement1").prop('checked') == true) {
            $("#agreement1").prop('checked', false);
            $("#submit").prop('disabled', true);
        }
    });
    
    $('[for="contactChoice3"]').on('click', function(){
       $('.otkaz').show(); 
       $('#contactChoice1').hide(); 
       $('#contactChoice2').hide(); 
       $('[for="contactChoice1"]').hide(); 
       $('[for="contactChoice2"]').hide(); 
       $('#agreement').hide(); 
       $("#submit_dost").prop('disabled', false);
        $('[for="agreement"]').hide(); 
       $('input[name="res_dost"]').val($('#contactChoice3').val());
    });
    $('[for="contactChoice2"]').on('click', function(){
       $('.otkaz').hide(); 
       $('input[name="res_dost"]').val($('#contactChoice2').val());
    });
    $('[for="contactChoice1"]').on('click', function(){
       $('.otkaz').hide(); 
       $('input[name="res_dost"]').val($('#contactChoice1').val());
    });
    $('[for="fiz_litso"]').on('click', function(){
       $('.fiz_litso').show(); 
       $('.ur_litso').hide(); 
    });
    $('[for="ur_litso"]').on('click', function(){
       $('.ur_litso').show(); 
       $('.fiz_litso').hide(); 
    });
});