$(".like").on('click', function() {
    var like_s = $(this).attr('data-like');
    var post_id = $(this).attr('data-post_id');
    post_id = post_id.slice(0, -2);

    $.ajax({
        type: 'post',
        url: "{{route('like.save')}}",
        data: {
            like_s: like_s,
            post_id: post_id,
            _token: "{{ csrf_token() }}"
        },
        success: function(data) {
            // alert(data.is_like);
            // alert(post_id);
            if (data.is_like == 1) {
                $('*[data-post_id="' + post_id + '_l"]').removeClass('secondary').addClass('purpule');
                $('*[data-post_id="' + post_id + '_d"]').removeClass('purpule').addClass('secondary');
                var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text();
                var new_like = parseInt(cu_like) + 1;
                var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text(new_like);
                if (data.change_like == 1) {
                    var cu_dislike = $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text();
                    var new_dislike = parseInt(cu_dislike) - 1;
                    $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text(new_dislike);


                }

            }
            if (data.is_like == 0) {
                $('*[data-post_id="' + post_id + '_l"]').removeClass('purpule').addClass('secondary');
                var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text();
                var new_like = parseInt(cu_like) - 1;
                var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text(new_like);
            }
        }
    })
});
// كود الخاص بال  dislike
$(".dislike").on('click', function() {
    var like_s = $(this).attr('data-like');
    var post_id = $(this).attr('data-post_id');
    post_id = post_id.slice(0, -2);

    $.ajax({
        type: 'post',
        url: "{{route('dislike.save')}}",
        data: {
            like_s: like_s,
            post_id: post_id,
            _token: "{{ csrf_token() }}"
        },
        success: function(data) {

            //  alert(data.change_dislike);
            if (data.is_dislike == 1) {
                $('*[data-post_id="' + post_id + '_d"]').removeClass('secondary').addClass('purpule');
                $('*[data-post_id="' + post_id + '_l"]').removeClass('purpule').addClass('secondary');
                var cu_dislike = $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text();
                var new_dislike = parseInt(cu_dislike) + 1;
                $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text(new_dislike);
                if (data.change_dislike == 1) {
                    var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text();
                    var new_like = parseInt(cu_like) - 1;
                    $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text(new_like);
                }
            }
            if (data.is_dislike == 0) {
                $('*[data-post_id="' + post_id + '_d"]').removeClass('purpule').addClass('secondary');
                var cu_dislike = $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text();
                var new_dislike = parseInt(cu_dislike) - 1;
                $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text(new_dislike);
            }
        }
    })
});

function preventFunction(x) {
    alert("عليك تسجيل الدخول أولا");
}

function myFunction1(y) {
    y.classList.toggle("fa-heart");
}
// كود لحذف المنشور
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '#delete_post', function() {
        if (confirm('هل أنت متأكد من حذف هذا المنشور')) {
            var thisClicked = $(this);
            var post_id = thisClicked.val();
            $.ajax({
                type: "post",
                url: "/delete-post",
                data: {
                    'post_id': post_id
                },
                success: function(res) {
                    if (res.status == 200) {
                        $('#delete-' + post_id).remove();
                        alert(res.message);
                    } else {
                        alert(res.message);
                    }
                }
            });
        }
    });
});
// كود لحذف التعليق
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.deleteComment', function() {
        if (confirm('هل أنت متأكد من حذف هذا التعليق')) {
            var thisClicked = $(this);
            var comment_id = thisClicked.val();
            $.ajax({
                type: "post",
                url: "/delete-comment",
                data: {
                    'comment_id': comment_id
                },
                success: function(res) {
                    if (res.status == 200) {
                        // thisClicked.closest('.comment-container').remove();
                        alert(res.message);
                        $('#comment_' + comment_id).remove();
                    } else {
                        alert(res.message);
                    }
                }
            });
        }
    });
});
// كود تعديل التعليق
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.editComment', function() {
        var thisClicked = $(this);
        var comment_id = thisClicked.val();
        var comment = $('#text_comment' + comment_id).val();
        $.ajax({
            type: "post",
            url: "/edit-comment",
            data: {
                'comment_id': comment_id,
                'comment': comment
            },
            success: function(res) {
                if (res.status == 200) {
                    $('#comment' + res.comment.id).text(res.comment.comment);
                    $('.editModal').hide();
                } else {
                    alert(res.message);
                }
            }
        });

    });
});
// كود إضافة تعليق 
// $(document).ready(function() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $(document).on('click', '#addComment', function() {

//         var thisClicked = $(this);
//         var post_id = thisClicked.val();
//         var comment = $('#text_addComment-' + post_id).val();
//         $.ajax({
//             type: "post",
//             url: "/save-comment",
//             data: {
//                 'post_id': post_id,
//                 'comment': comment,
//             },
//             success: function(res) {
//                 if (res.status == 200) {
//                     var model = ' <div class="modal fade editModal" id="editcomment-' + res.comment.id + '" aria-hidden="true" aria-labelledby="editcomment" tabindex="-1" dir="rtl"><div class="modal-dialog modal-md modal-fullscreen-lg-down modal-dialog-centered modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><h5 class="modal-title fw-bold fs-4" id="exampleModalLabel">تعديل</h5><div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></div><form action="" method="Post" id="frmhomesearch"><div class="modal-body"><div class="text-decoration-none d-flex flex-row my-4"><textarea class="form-control " id="text_comment' + res.comment.id + '" rows="4">' + res.comment.comment + '</textarea></div></div></form><div class="modal-footer"><button type="button" class="btn bg-purple text-light editComment" data-bs-dismiss="modal" value="' + res.comment.id + '">تحديث</button></div></div></div></div>';
//                     $('#content').append(model);
//                     var newComment = '<div class="text-decoration-none d-flex flex-row my-4 " id="comment_' + res.comment.id + '" href=""><a href=""><img class="rounded-circle align-self-start ms-1" src="../../Images/user/' + res.user.image_url + '" width="60"></a><div class="d-flex flex-column justify-content-start bd-gray-100 rounded-3 px-3 py-2 w-100"><div class="d-flex flex-row justify-content-between"><div class="d-flex flex-column justify-content-start"><span class="d-block text-dark fs-6 fw-bold">' + res.user.name + '</span><span class="text-black-50 pb-1"><?php echo now()->diffForHumans(); ?></span></div><div class="dropdown"><span data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i></span><ul class="dropdown-menu text-end"><li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#editcomment-' + res.comment.id + '"role="button" value="' + res.comment.id + '"><i class="far fa-edit text-muted"></i>&nbsp;تعديل</button></li> <li><button class="dropdown-item  deleteComment" type="button" value="' + res.comment.id + '"><i class="far fa-trash-alt text-muted"></i>&nbsp;حذف</button></li></ul></div></div><span class="text-muted " id="comment' + res.comment.id + '">' + res.comment.comment + '</span></div></div>';
//                     $("#offcanvas-body-" + res.comment.post_id).append(newComment);
//                     // $('#text_addComment').reset();
//                     document.getElementById('text_addComment-' + res.comment.post_id).value = "";
//                 } else {
//                     alert(res.status);

//                 }
//             }
//         });
//     });
// });
// كود إضافة بوست للمحفوظات 
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '#addSavedPost', function() {
        var thisClicked = $(this);
        var post_id = thisClicked.val();
        $.ajax({
            type: "post",
            url: "/add_saved_post",
            data: {
                'post_id': post_id,
            },
            success: function(res) {
                if (res.status == 200) {
                   document.getElementById('addSavedPost').textContent='إلغاء الحفظ';
                   document.getElementById("addSavedPost").setAttribute("id", "removeSavedPost");
                    alert(res.message);
                } else {
                    alert(res.status);
                }
            }
        });
    });
});
// كود إزالة بوست للمحفوظات 
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $(document).on('click', '#removeSavedPost', function() {
        if (confirm('هل أنت متأكد من إزالة المنشور من محفوظاتك')) {
        var thisClicked = $(this);
        var post_id = thisClicked.val();
        $.ajax({
            type: "post",
            url: "/remove_saved_post",
            data:{
                post_id:post_id
            },
            success: function(res) {
                if (res.status == 200) {
                    document.getElementById('removeSavedPost').textContent='حفظ';
                    document.getElementById("removeSavedPost").setAttribute("id", "addSavedPost");
                    alert(res.message);
                } else {
                    alert(res.status);
                }
            }
        });}
    });
}); 

