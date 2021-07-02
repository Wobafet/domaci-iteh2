$(document).ready(function () {
    $("body").on("click", ".delete", function (e) {
        let id = $(this).attr("id");
        $.ajax({
            type: "DELETE",
            url: "http://127.0.0.1:8000/schedules/delete/" + id,
            dataType: "json",
            data:{
                "id":id
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                alert(response.message);
                window.location.href = "http://127.0.0.1:8000/schedule";
            },
            error: function(response) {
                alert(response.message);
            }
        });
    });
});