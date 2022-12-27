
// jQuery(document).ready(function ($) {
//     // CREATE
//     $("#btn").click(function (e) {
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         e.preventDefault();
//         var  content: $('#content').val();
//         alert(content);
//         var state = jQuery('#btn').val();
//         var type = "POST";
//         var ajaxurl = 'store_message';
//         $.ajax({
//             type: type,
//             url: ajaxurl,
//             data: formData,
//             dataType: 'json',
//             success: function (response) {
//                 jQuery('#MessageForm').trigger("reset");
//                 printMsg(response);
//             },
//             error: function (data) {
//                 console.log(data);

//             }
//         });
//     });
//     function printMsg(msg) {
//         if ($.isEmptyObject(msg.error)) {
            
//             $('.alert-block').css('display', 'block').append('<strong>' + msg.success + '</strong>');
//         } else {
//             $.each(msg.error, function (key, value) {
//                 $('.' + key + '_err').text(value);
//             });
//         }
//     }
// });
