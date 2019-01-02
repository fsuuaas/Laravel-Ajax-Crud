$(document).ready(function(){

    // add new user

    $(document).on('click','#create',function(){
        var username = $('input[name=username]').val();
        var email = $('input[name=email]').val();
        var designation = $('select[name=designation]').val();
        $.ajax({
            type:'POST',
            url:'/',
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data:{
                username:username,
                email:email,
                designation:designation
            },
            success:function(data){
                if((data.errors)){
                    if(data.errors.username){
                        $('.usernameError').text(data.errors.username);
                    }else{
                        $('.usernameError').text(''); 
                    }

                    if (data.errors.email) {
                        $('.emailError').text(data.errors.email);
                    }else{
                        $('.emailError').text('');
                    }

                    if (data.errors.designation) {
                        $('.errorDesignation').text(data.errors.designation);
                    }else{
                        $('.errorDesignation').text('');
                    }
                }else{
                    $('#exampleModal').modal('hide');
                    $('input[name=username]').val('');
                    $('input[name=email]').val('');
                    $('select[name=designation]').val('');
                    $('#userData').append(
                        '<tr class="user-' + data.id + '">' +
                            '<td>'+ data.id +'</td>'+
                            '<td>' + data.username + '</td>' +
                            '<td>' + data.email + '</td>' +
                            '<td>' + data.designation + '</td>' +
                            '<td>' +
                                '<button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#viewModal" data-id="'+ data.id +'" data-username="'+ data.username +'" data-email="'+ data.email +'" data-designation="'+ data.designation +'">View</button>'+
                                '<button class="btn btn-raised btn-info" data-toggle="modal" data-target="#editModal" data-id="' + data.id + '" data-username="'+ data.username +'" data-email="'+ data.email +'" data-designation="'+ data.designation +'">Edit</button>'+
                                '<button class="btn btn-raised btn-danger" data-id="'+ data.id +'">Remove</button>'+
                            '</td>' +
                        '</tr>'
                    );
                }
            }
        });
    });

    // view user data
    $(document).on('click', '#viewUserModal', function () {
        $('input[name=view_username]').val($(this).data('username'));
        $('input[name=view_email]').val($(this).data('email'));
        $('select[name=view_designation]').val($(this).data('designation'));
        $('#viewModal').modal('show');
    });

    // view user data for editting
    $(document).on('click', '#editUserModal', function () {
        $('input[name=edit_username]').val($(this).data('username'));
        $('input[name=edit_email]').val($(this).data('email'));
        $('select[name=edit_designation]').val($(this).data('designation'));
        $('input[name=edit_id]').val($(this).data('id'));
        $('#editModal').modal('show');
    });
});

