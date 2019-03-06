//---------获取消息------------
function getMessage(from, pre_type) {
    $.post(
        '/admin/get-message',
        {
            _token: $("input[name='_token']").val(),
            from: from,
            pre_type: pre_type
        },
        function (data) {
            if (data.code == '1001') {
                $("#hide-from").val(from);
                $("#hide-pre_type").val(pre_type);
                $("#ul-message").html(data.msg);
                $("#people-list").slideUp();
                $("#paginate-nav").slideUp();
                $("#reply-panel").slideDown();
            } else {
                showMessage(data.msg);
                return false;
            }
        },
        'json'
    );
}

function goBack() {
    $("#reply-content").val("");
    $("#reply-panel").slideUp();
    $("#paginate-nav").slideDown();
    $("#people-list").slideDown();
}

//店长回复消息
function reply() {
    //回复消息时，发送方变为接收方
    var to = $("#hide-from").val();
    var type = $("#hide-pre_type").val();
    var content = $("#reply-content").val();
    if (content.trim() == '') {
        $("#reply-content").focus();
        return false;
    } else {
        $.post(
            '/admin/reply-message',
            {
                _token: $("input[name='_token']").val(),
                to: to,
                type: type,
                content: content
            },
            function (data) {
                if (data.code == '1001') {
                    $("#reply-content").val("");
                    $("#ul-message").append(data.msg);
                } else {
                    showMessage(data.msg);
                    return false;
                }
            },
            'json'
        );
    }
}

//发型展示---切换显示状态
function doSwitch(id, obj) {
    var state = $(obj).is(':checked') ? 1 : 0;
    $.get(
        '/admin/case/' + id,
        {
            state: state
        },
        function (data) {
            if (data.code != '1001') {
                showMessage(data.msg);
                return false;
            }
        },
        'json'
    );
}

//提示消息
function showMessage(message) {
    swal({
        html: '<span style="color: #444;font-size: 20px;">' + message + '</span>',
        width: 500,
        height: 300,
        background: '#ddd',
        showConfirmButton: false,
        timer: 1500
    });
}

//后台做删除
function doDestroy(id, module) {
    Swal.fire({
        title: '确认删除吗？',
        // text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#abc',
        confirmButtonText: '确认',
        cancelButtonText: '取消'
    }).then((result) => {
        if (result.value) {
            $.post(
                '/admin/' + module + '/' + id,
                {
                    _token: $("input[name='_token']").val(),
                    _method: "DELETE",
                    id: id
                },
                function (data) {
                    if (data.code == '1001') {
                        window.location.href = '/admin/' + module
                    } else {
                        showMessage(data.code + data.msg);
                        return false;
                    }
                },
                'json'
            );
        }
    });
}

//上传URL,文件域的id，显示图片的id,隐藏的id
function uploadThumb(url, file_id, show_id, hide_id) {
    $.ajaxFileUpload({
        url: url,//用于文件上传的服务器端请求地址
        secureuri: false,//是否需要安全协议，一般设置为false
        fileElementId: file_id,//文件上传域的id  <input type="file" id="file" name="file" />
        data: {
            '_token': $('input[name=_token]').val(),
            'file_id': file_id,
        },
        dataType: 'json',//返回数据类型:text，xml，json，html,scritp,jsonp五种
        type: 'post',
        success: function (result)  //服务器成功响应处理函数
        {
            if (result.code == '1001') {
                if (show_id) {
                    $("#" + show_id).show();
                    $("#" + show_id).attr('src', result.msg);
                }
                $("#" + hide_id).val(result.msg);
            } else {
                swal(result.msg);
            }
        }
    })
}

//点击单号表示已读
function iKnow(obj, orderId) {
    $.get(
        '/admin/clerk/' + orderId + '/edit',
        {
            order_id: orderId
        },
        function (data) {
            if (data.code == '1001') {
                var old_num = $("#tip_num").html();
                var now_num = parseInt(old_num) - 1;
                if (parseInt(now_num) > 0) {
                    $("#tip_num").html(now_num);
                } else {
                    $("#tip_num").html("");
                }
                $(obj).attr("style", "");
                $(obj).attr("onclick", "");
                $(obj).html(data.msg);
            } else {
                showMessage(data.msg);
                return false;
            }
        },
        'json'
    );
}