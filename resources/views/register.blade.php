<x-layout>
    @push('style')
    <div class="container-flud p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-5 p-5 text-center">
                    <h2 class="text-info">Your Welcome!</h2>
                    <h5 class="text-info">You can create own your Slam Book for memories yor funny moment in your life with his friend and families.</h5>
                </div>
                <div class="col-md-5 p-3">
                    <h3 class="m-5 text-info text-center">User Registration</h3>
                    <form action="/register" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="text" name="name" id="name" class="form-control mt-3" placeholder="Please Enter Name.." required>
                        <div class="invalid-feedback">
                            Please enter valid Name
                        </div>
                        <input type="email" name="email" id="email" class="form-control mt-3" placeholder="Please Enter email.." required>
                        <div class="invalid-feedback">
                            Please enter valid email
                        </div>
                        <input type="password" name="password" id="password" class="form-control mt-3" placeholder="Please Enter Password.." required>
                        <div class="invalid-feedback">
                            Please enter valid email
                        </div>
                        <input type="password" name="repassword" id="repassword" class="form-control mt-3" placeholder="Please Enter Confirm Password.." required>
                        <div class="invalid-feedback">
                            Please enter valid email
                        </div>
                        <button type="submit" class="btn bg-info text-white mt-3">Submit</button>
                        <hr>
                    </form>
                    <p>Are you already registered? Go to <a href="/">Log In</a></p>
                    <div class="p-3 mb-2 bg-info text-white text-center rounded border-2">Thank you!</div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    @endpush
</x-layout>