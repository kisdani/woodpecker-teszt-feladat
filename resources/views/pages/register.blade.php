@extends("main")

@section("content")

        <div class="center">
            <h1>Registration</h1>
            <form method="POST" id="register_form">
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

@endsection
