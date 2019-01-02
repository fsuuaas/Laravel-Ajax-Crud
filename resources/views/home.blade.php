@include('includes.header')
<body>
    <nav class="navbar navbar-dark bg-primary" style="background-color: #00897B !important;">
        <h2 class="navbar-brand ml-auto mr-auto">Laravel Ajax</h2>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Users</h2>
                        <button class="btn btn-raised btn-success float-right" data-toggle="modal" data-target="#exampleModal">Create</button>
                    </div>                    
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-uppercase">Id</th>
                                    <th scope="col" class="text-uppercase">Username</th>
                                    <th scope="col" class="text-uppercase">Email Address</th>
                                    <th scope="col" class="text-uppercase">Designation</th>
                                    <th scope="col" class="text-uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="user-{{ $user->id }}">
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->designation }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="">
                                                <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#viewModal" data-id="{{ $user->id }}"
                                                        data-username="{{ $user->username }}" data-email="{{ $user->email }}" data-designation="{{ $user->designation }}">View</button>
                                                <button class="btn btn-raised btn-info" data-toggle="modal" data-target="#editModal" data-id="{{ $user->id }}"
                                                        data-username="{{ $user->username }}" data-email="{{ $user->email }}" data-designation="{{ $user->designation }}">Edit</button>
                                                <button class="btn btn-raised btn-danger" data-id="{{ $user->id }}">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New User Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" name="username">
                            <span class="text-danger usernameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Email Address</label>
                            <input type="email" class="form-control" name="email">
                            <span class="text-danger emailError"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1" class="bmd-label-floating">Designation</label>
                            <select class="form-control" name="designation">
                                <option value=""></option>
                                <option value="android-developer">Android Developer</option>
                                <option value="ios-programmer">iOS Programmer</option>
                                <option value="web-developer">Web Developer</option>
                            </select>
                            <span class="text-danger errorDesignation"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-raised">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit User Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control">
                            <span class="text-danger">Username Error Message</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Email Address</label>
                            <input type="email" class="form-control">
                            <span class="text-danger">Email Address Error Message</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1" class="bmd-label-floating">Designation</label>
                            <select class="form-control">
                                <option value=""></option>
                                <option value="android-developer">Android Developer</option>
                                <option value="ios-programmer">iOS Programmer</option>
                                <option value="web-developer">Web Developer</option>
                            </select>
                            <span class="text-danger">Designation Error Message</span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-raised">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View User Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Email Address</label>
                            <input type="email" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1" class="bmd-label-floating">Designation</label>
                            <select class="form-control" disabled>
                                <option value=""></option>
                                <option value="android-developer">Android Developer</option>
                                <option value="ios-programmer">iOS Programmer</option>
                                <option value="web-developer">Web Developer</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-raised" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')