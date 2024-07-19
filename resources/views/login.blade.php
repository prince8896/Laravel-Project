<h2>Login Form</h2>
<form method="POST" action="/login">
    @csrf
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div> <br>
    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
    </div> <br>
    <button type="submit">Login</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif