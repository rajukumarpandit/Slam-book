<x-layout>
    @push('style')
    <div class="container">
        <div class="box">
            <h1 class="text-info text-center">Foget Password</h1>
            <form action="/forget" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="email" class="form-control mt-3" name="email" id="email" placeholder="Enter your email" required>
                        <input type="password" class="form-control mt-3" name="pass" id="pass" placeholder="Enter New password." required>
                        <input type="password" class="form-control mt-3" name="cpass" id="cpass" placeholder="Enter Conform password." required>
                        <button type="submit" class="btn btn-info mt-3 mb-3">Update</button>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    @push('script')
    @endpush
</x-layout>