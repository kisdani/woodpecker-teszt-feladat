@extends("main")

@section("content")

        <div class="center">
            <h1>Registration</h1>
            <form method="POST" id="first_form">
                @csrf
                <div class="txt_field">
                    <input type="text" id="name" name="name">
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" id="password" name="password">
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="txt_field">
                    <input type="password" id="confirm-password">
                    <span></span>
                    <label>Confirm Password</label>
                </div>
                <div class="alerts">
                    <div class="alert alert-danger" role="alert">
                        This is a danger alert—check it out!
                    </div>
                </div>

                <input type="button" value="Register">

            </form>
        </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
