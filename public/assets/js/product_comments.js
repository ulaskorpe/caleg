



async function delete_status(comment_id,page,status,product_id=0){
    Swal.fire({
            title: (status == 3) ? 'comment will be deleted? ': 'status will be changed?',

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed


            if (result.isConfirmed) {
                $.get('/admin/products/comments/delete/'+comment_id+'/'+status,  // url

                    function (data) {  // success callback
                        Swal.fire({
                        icon: (data.status) ? 'success': 'error',
                        text: data.message
                    });
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                    show_data('/admin/products/comments/'+product_id+'/'+page,'comment_list');
                }, 2000);
                   /// $('#logout-form').submit();
            }
        });
}

 
async function update_comment(comment_id,page,product_id=0){

let txt ="/admin/products/comments-update/"+comment_id+"/"+page+"/"+product_id ;

console.log(txt);
$.get( txt, function( data ) {
$('#comment_list').html(data);

});

}

 
async function updateComment() {

let error = false;


if ($('#title').val() == '') {

$('#title').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün adı giriniz'
});

error = true;
return false;
} 

 


if ($('#comment').val() == '') {

    $('#comment').focus();
    Swal.fire({
        icon: 'error',
        text: 'enter comment'
    });

    error = true;
    return false;
}



 


 var formData = new FormData(document.getElementById('comment-form-submit'));

  $('#submit_button').prop('disabled',true);
  
  await save(formData, "{{ route('admin.product.comments.update.post') }}", '', '','');
 
    setTimeout(() => {

        show_data('/admin/products/comments/'+$('#page').val() +'/'+$('#product_id').val(),'comment_list');

         
}, 2000);

  }
