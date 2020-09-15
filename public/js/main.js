$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#createForm').submit(function (e){
    e.preventDefault();

    let formData = $('#createForm').serializeArray();

    $.ajax({
        type:'post',
        data: formData,
        url:'/customer/store/',
        success:function (data,status) {


            swal("Good job!", "Data Successfully Inserted", "success");

            $("#createForm")[0].reset();
            $('#CustomerTableBody').prepend(
                `
                    <tr>
                            <td>`+data.name+`</td>
                            <td>`+data.roll+`</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Update</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                        </tr>
                `
            )



        },

        error:function (error)
        {

        }

    })

})


//    Edit Task

$(document).on('click','.edit',function (){
    let customer = $(this).closest('tr').data('id');
    let modal = $('#editForm');
    $.ajax({
        type: 'GET',
        url: '/customer/edit/'+customer,
        success:function (data)
        {
            $(modal).find('#name').val(data.name);
            $(modal).find('#roll').val(data.roll);
        },

        error:function (error)
        {
            console.log(error)
        }
    })
})

// Update Task
