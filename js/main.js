$(document).ready(function(){
   
    let cusName = $('.cus-name');
    cusName.each(function(index){
       $(this).attr('id', 'cus-name-' + (index + 1));    
    });

    let move = $('.subtotal');
    let lastSub = $('.subtotal').last();
    let lastRec = $('.tr2').last();
    let count2 = 1;
    move.each(function(index){
        count2 += 1;
        let before = $('#cus-name-'+count2).prev();
        $(this).insertBefore(before);
    });

    $(lastSub).insertAfter(lastRec);

});