$(document).ready(function () {
    $(document).on("submit", "form", function (e) {
        e.preventDefault();

        var option = {
            url: "request.php?action=" + $(this).attr("target"),
            type: "post",
            dataType: 'json',
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: () => {},
            success: (response) => {
                if(response.status == "OK")
                    alert("Message submitted successfully");
                else if (response.status == "MISSING_PARAMETER")
                    alert(response.message);
                else if (response.status == "INVALID_EMAIL")
                    alert(response.message);
                else if (response.status == "ERROR")
                    alert(response.message);
                else 
                    alert("Action for error message");
                
            }
        }

        $.ajax(option);
    })
})