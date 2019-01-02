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
                                    <th scope="col" class="text-uppercase"><h>Id</h></th>
                                    <th scope="col" class="text-uppercase"><h>Username</h></th>
                                    <th scope="col" class="text-uppercase"><h>Email Address</h></th>
                                    <th scope="col" class="text-uppercase"><h>Designation</h></th>
                                    <th scope="col" class="text-uppercase"><h>Action</h></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="">
                                            <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#viewModal">View</button>
                                            <button class="btn btn-raised btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
                                            <button class="btn btn-raised btn-danger">Remove</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="">
                                            <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#viewModal">View</button>
                                            <button class="btn btn-raised btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
                                            <button class="btn btn-raised btn-danger">Remove</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="">
                                            <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#viewModal">View</button>
                                            <button class="btn btn-raised btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
                                            <button class="btn btn-raised btn-danger">Remove</button>
                                        </div>
                                    </td>
                                </tr>
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