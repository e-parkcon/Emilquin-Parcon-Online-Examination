$(document).ready(function(){
    
    var table = $('#tbl_songs').DataTable({
        "ajax": "/song_lists",
        "columns": [
            {
                "data" : "title"
            },
            {
                "data": "artist",
            },
            {
                "data": "created_at"
            },
            {
                "data" : null,
                render: function(data){
                    return "<a href='#' class='btn btn-sm btn-primary btn-block' id='btn-edit'><small>Edit</small></a>"+
                        
                            "<a class='btn btn-sm btn-danger btn-block' href='#' id='btn-delete'><small>Delete</small></a>";
                }
            }
        ]
    });

    $('#tbl_songs tbody').on( 'click', 'a', function () {
		var data = table.row( $(this).parents('tr') ).data();
		
		if($(this).attr('id') == 'btn-edit'){
			window.location.href = '/song/'+data['id']+'/edit';

		}

		if($(this).attr('id') == 'btn-delete'){
			$.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "DELETE",
                url: '/song/'+data['id'],
                success: function(response){
                    table.ajax.reload();
                },
                error: function(xhr, status, error){
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    console.log(status, xhr, error);
                    $.alert('Error - ' + errorMessage);
                }
            });
		}


	} );

});