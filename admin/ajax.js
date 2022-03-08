$(function(){

    $(document).on("click", ".social_button", function() {
        var _this = $(this);

        swal.fire({
            title: 'Social Media Update',
            html: "<p>Enter your new social media link: </p>",
            input: 'text',
            inputAttributes: {
              autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Update',
            showLoaderOnConfirm: true,
            preConfirm: (_link) => {
                
              return fetch(
                `../request.php?action=social_update`,
                {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({link: _link, title: _this.attr("title")})
                }
              ).then(response => {
                  
                  if (!response.ok) {
                    return {status: "ERROR"};
                  }
                  return response.json()
                })
                .catch(error => {
                  Swal.showValidationMessage(
                    `Request failed: ${error}`
                  )
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            console.log(result);
            
            if (result.value.status == "OK") {
              swal.fire({
                title: `Update Successful`,
                icon: "success",
                text: "Account Updated Successfully"
              }).then(() => { window.location.reload()})
            } else if (result.value.status == "MISSING_PARAMETER") {
                swal.fire({
                    title: `Empty Field`,
                    icon: 'warning',
                    text: "Account cannot have an empty link"
                })  
            } else {
                swal.fire({
                    title: `Error occured`,
                    icon: 'error',
                    text: result.value.message
                })    
            }
        })
    })

    $(".loodding").hide();

    function myloader(){
        $(".loodding").show();
    };

    function myresponse(response){
        $("#myresp").html(response);
        $('#myalert').fadeOut(6000);
    };

    function deleteitem(response){

        alert(response);
        location.reload(true);

    }


// adding activity
    $("#actfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=aadevent",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });



    // Adding Testimony



    
    $("#testifrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=adtestimony",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    $("#sermonfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addsermon",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

   
    // Deleting activity


    $(".btndel").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "del.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })

    // updating activity
    $("#uptactfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=updateactivity",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    // adding of tour service

    $("#tourfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addtour",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    // updating Tour
    $("#upttourfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=updatetourserv",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

// deleting tour service
    $(".btndeltour").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "deltour.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    // Add Accomodation
    $("#accfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addacomo",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });



    // Updating Accomodation

    $("#uptaccfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=updateaccserv",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    // Deleting Accomodation 

    $(".btndelacomo").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delacomo.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })



    $(".btndeltes").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "deltest.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })

    $("#locfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addlocation",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

    $(".btndelloc").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delloc.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    $("#logfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=login",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

   

    
})