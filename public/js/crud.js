// add new user

$(document).ready(function(){
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
});