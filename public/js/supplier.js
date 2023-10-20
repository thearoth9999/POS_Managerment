$(document).ready(function() {

    $(document).on("click","#btn-modal",function() {
        Clear_data();
    }); 

    $('.supplier_tb').DataTable({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        ajax: {
            url: "/supplier/show",
        },
        "method": "GET",
        type: "json",
        processing: true,
        serverSide: true,
        columns: [
            {data: 'id', name: 'id'},
            {data: 'supplier_name', name: 'supplier_name'},
            {data: 'email', name: 'email'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'address', name: 'address'},
            // {data: 'action', name: 'action', orderable: true, searchable: true,
            {render: function (data, type,row,meta) {
                $btn = '<div class="flex justify-center items-center">'+
                            '<a id="btn-edit" data-id="'+row.id+'" class="flex items-center mr-3" href="javascript:void(0);"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Edit </a>'+
                            '<a id="btn-delete" data-id="'+row.id+'"  class="flex items-center text-theme-6" href="javascript:void(0);"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete </a>'
                        +'</div>';
                return $btn;
                
            },
            
        }
           
        ],
        
        
    });
                               
    $(document).on("click","#btn-edit",function() {
       
        var id = $(this).attr("data-id");
        $.ajax({
            url: "/supplier/update?id="+id,
            type: "GET",
            dataType: 'json',
            success: function (data) {
                
                // console.log(data.id);
                $(".supplier_modal").modal('show');
                $(".header-supplier").text("Update Supplier");
                $("#btn-submit").text("Update");
                $("#id").val(data.id);
                $("#supplier_name").val(data.supplier_name);
                $("#email").val(data.email);
                $("#phone_number").val(data.phone_number);
                $("#address").val(data.address);

                if(data.success){
                    Swal.fire(
                        'Your Data has been Updated.',
                        'You clicked the button!',
                        'success'
                    )
                }
            },
            // error: function (data) {
            //     console.log('Error:', data);
            // }
        });
    });
    
  
    $(document).on("click","#btn-delete",function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var id = $(this).attr("data-id");
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/supplier/delete?id="+id,
                    type: "Post",
                    dataType: 'json',
                    success: function (data) {
                        
                        // console.log(data.id);
                
                    },
                    // error: function (data) {
                    //     console.log('Error:', data);
                    // }
                });
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
              ) {
                swalWithBootstrapButtons.fire(
                  'Cancelled',
                  'Your data is safe :)',
                  'error'
                )
              }
          });
        
    });


    function Clear_data(){
        $(".header-supplier").text("Add Supplier");
        $("#btn-submit").text("Add");
        $("#id").val("");
        $("#supplier_name").val("");
        $("#email").val("");
        $("#phone_number").val("");
        $("#address").val("");
    }
   
});






