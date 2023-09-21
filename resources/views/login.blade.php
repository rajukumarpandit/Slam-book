<x-layout>
    @push('style')
    <div class="container-flud p-2 bg-baner">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-5 p-5 text-center">
                    <h2 class="text-info">Your Welcome!</h2>
                    <h5 class="text-info">You can create own your Slam Book for memories yor funny moment in your life with his friend and families.</h5>
                </div>
                <div class="col-md-5 p-3">
                    <h3 class="m-5 text-info text-center">User Login</h3>
                    <form action="/login" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="email" name="email" id="email" class="form-control mt-3" placeholder="Please Enter email.." required>
                                <div class="valid-feedback">
                                    valid email
                                </div>
                                <div class="invalid-feedback">
                                    Please Enter valid email.
                                </div> 
                        <input type="password" name="password" id="password" class="form-control mt-3"maxlength="10" minlength="3" pattern="^[a-zA-Z0-9_.-]*$" placeholder="Please Enter Password.." required>
                                <div class="invalid-feedback">
                                    Please Enter valid password.
                                </div>
                        <button type="submit" class="btn bg-info text-white mt-3">Log In</button>
                        <hr>
                    </form>
                    <p>Are you not registered? Now Go to <a href="/register">Register</a></p>
                    <hr>
                    <p>Forgot Password? <a href="/forget">Go to</a></p>
                    <div class="p-3 mb-2 bg-info text-white text-center rounded border-2">Thank you!</div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    @endpush
</x-layout>