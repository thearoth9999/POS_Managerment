$(document).ready(function() {
        
    $(document).on("click","#btn-modal",function() {
        Clear_data();
    }); 

    $('.category_tb').DataTable({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        ajax: {
            url: "/category/show",
        },
        "method": "GET",
        type: "json",
        processing: true,
        serverSide: true,
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'image', name: 'image'},
            {data: 'description', name: 'description'},
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
            url: "/category/update?id="+id,
            type: "GET",
            dataType: 'json',
            success: function (data) {
                
                // console.log(data.id);
                $(".category-modal").modal('show');
                $(".header-category").text("Update Category");
                $("#btn-submit").text("Update");
                $("#id").val(data.id);
                $("#category").val(data.name);
                $("#image").attr("value",data.image);
                $("#description").val(data.description);
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
                    url: "/category/delete?id="+id,
                    type: "Post",
                    dataType: 'json',
                    success: function (data) {
                        
                        if(data.success){
                            Swal.fire(
                                'Your Data has been Deleted.',
                                'You clicked the button!',
                                'success'
                            )
                            
                        }           
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
                    }
            })
    });

    // $("#form").submit(function(e) {
    //     // var data = $(this).serialize();
    //     e.preventDefault();
    //     $.ajax({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         url: "/category/post",
    //         type: "Post",
    //         dataType: 'json',
    //         success: function (data) {
    //             if(data.success){
    //                 Swal.fire(
    //                     'Good job!',
    //                     'You clicked the button!',
    //                     'success'
    //                 )    
    //             }
                       
    //         },
    //     // //     // error: function (data) {
    //     // //     //     console.log('Error:', data);
    //     // //     // }
    //     });
    // });

    function Clear_data(){
        $(".header-category").text("Add Category");
        $("#btn-submit").text("Add");
        $("#id").val("");
        $("#category").val("");
        $("#image").removeAttr("src");
        $("#description").val("");
    }
   
    Clear_data();
});






