// input decrease/increase handle
$('#decrease-input').on('click',function () {
    let inputTag = $(this).parent().children('input');
    let currentVal = parseInt(inputTag.val());

    if (currentVal > 0){
        inputTag.val(currentVal-1);
    }
    console.log(inputTag.val());
});

$('#increase-input').on('click',function () {
    let inputTag = $(this).parent().children('input');
    let currentVal = parseInt(inputTag.val());
    inputTag.val(currentVal+1);
});
///////////////////////////////////

