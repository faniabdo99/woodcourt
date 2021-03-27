@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>Admin Panel</h1>
          <p>Please Login to Continue</p>
          <form class="woodcourt-form login-form" action="{{route('login.post')}}" method="post">
            @csrf
            <label>Email</label>
            <input type="email" name="email" placeholder="Please Enter Your Email Here" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Please Enter Your Password Here" required>
            <label><input class="d-inline w-auto" type="checkbox" name="save_login" value="yes"> Remember Me</label>
            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
    @include('layout.scripts')
</body>

</html>
