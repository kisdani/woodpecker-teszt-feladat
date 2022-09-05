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
            <input type="submit" value="Sign In">
        </form>
    </div>

@endsection
