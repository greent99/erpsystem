// display overlay
$('.text-muted').on('click',function () {
    console.log('display');
    let parent = $(this).parent().parent().parent();
    parent.children('.product-img').children('.overlay-custom').fadeTo(500,1);
});
// hidden overlay
$('.dripicons-cross').on('click',function () {
    console.log('hidden');
    let parent = $(this).parent();
    parent.fadeTo(500,0);
});
