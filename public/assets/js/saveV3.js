async function save(formData,route,formID,btn,reload) {
 console.log("here i am"+reload);
    $.ajax({

        url:  route,
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {

            if(data.status=='error'){
                Swal.fire({
                    title: 'Hata!',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'Tamamdır'
                });

            }else{
                Swal.fire({
                    title: 'Tebrikler',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'Tamamdır'
                });

            }

            console.log(reload);


            setTimeout(function() {
                //location.reload();
               // alert(reload);
                window.open(reload,'_self');
            }, 3000);


        },
        error: function (data) {
            if (data.status === 422) {
                var errors = data.responseJSON.errors;
                var message = "";
                $.each(errors, function (key, value) {
                    message += key + ' : ' + value;
                });


                  //  $('#'+arr[3]).html(message);




                if(btn!='') {
                    $('#'+btn).css('display', '');
                    $('#'+btn+'-hourglass').css('display', 'none');
                }

            }
            //{"msg":"Yaz\u0131 Eklendi","id":19}
            if (data.status === 500) {

                if(btn!='') {

                    $('#'+btn).css('display', '');
                    $('#'+btn+'-hourglass').css('display', 'none');
                }
            }
        }
    });
}


async function show_data(link,div){

    $.get( link, function( data ) {
    $('#'+div).html(data);
    
    });
    
    }