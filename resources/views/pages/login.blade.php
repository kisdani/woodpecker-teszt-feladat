@extends("main")

@section("content")

    <div class="center">
        <h1>Login</h1>
        <form method="POST" id="first_form">
            <div class="txt_field">
                <input type="text" required id="name" name="name">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="alerts">
                <div class="alert alert-danger" role="alert">
                    This is a danger alert—check it out!
                </div>
            </div>
            <input type="button" value="Sign In">
        </form>
    </div>

    @if ($registered)
        <!-- Modal -->
        <script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
                $("button[data-dismiss='modal']").click(function (){
                    $('#exampleModal').modal('hide');
                });
            });
        </script>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                    </div>
                    <div class="modal-body">
                        Successful registration!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
