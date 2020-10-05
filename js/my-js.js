// $(document).ready(function(){
//     $('a.modal').click(function(){
//         // lấy giá trị thuộc tính href 
//         var Box = $(this).attr('href');
//         // cho hộp thoại hiện trong 300ms
//         $(Box).fadeIn(300);
//         //thêm phần tử id="over" vào sau body
//         $('body').append('<div id="over">');
//         $('#over').fadeIn(300);

//         return false;
//     });
//     //khi click đóng hộp thoại
//     $(document).on('click',"a.close, #over", function(){
//         $('#over, .myModal').fadeOut(300, function(){
//             $('#over').remove;
//         });
//         return false;
//     });
// });
$(document).ready(function(){
    $(".btn").click(function(){
        $("#myModal").modal('show');
    });
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});