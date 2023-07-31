function delete_user(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Deleted Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}

function restore_user(url,id){
    $.ajax(
        {
            url: url,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Restore',
                    text: 'Item Restores Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_user_Permanent(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Permanent Deleted.',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_car(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Deleted Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}

function restore_car(url,id){
    $.ajax(
        {
            url: url,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Restore',
                    text: 'Item Restores Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_car_Permanent(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Permanent Deleted.',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_brand(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Deleted Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}

function restore_brand(url,id){
    $.ajax(
        {
            url: url,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Restore',
                    text: 'Item Restores Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_brand_Permanent(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Permanent Deleted.',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_year(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Deleted Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}

function restore_year(url,id){
    $.ajax(
        {
            url: url,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Restore',
                    text: 'Item Restores Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_year_Permanent(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Permanent Deleted.',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_manual(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Deleted Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}

function restore_manual(url,id){
    $.ajax(
        {
            url: url,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Restore',
                    text: 'Item Restores Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_manual_Permanent(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Permanent Deleted.',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_contact(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Deleted Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}

function restore_contact(url,id){
    $.ajax(
        {
            url: url,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Restore',
                    text: 'Item Restores Successfully',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
function delete_contact_Permanent(url,id){
    $.ajax(
        {
            url: url,
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#utable').dataTable().fnDraw();
                new PNotify({
                    title: 'Item Deleted',
                    text: 'Item Permanent Deleted.',
                    icon: 'icon-checkmark3',
                    type: 'success'
                });
            },
            error: function (data) {
                console.log("error");
            }
        });

}
