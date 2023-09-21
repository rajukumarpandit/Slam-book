<x-layout>
    @push('style')
    <div class="container">
        <h1 class="m-5 text-info">Friend Lists</h1>
        <form action="/friendlists" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="row m-2">
                <div class="col-6 p-2">
                    <input type="text" name="slambookid" id="slambookid" class="form-control" required>
                </div>
                <div class="col-6 p-2">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your friend name" required>
                </div>
                <div class="col-6 p-2">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your frirnd email" required>
                </div>
                <div class="col-6 p-2">
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile number" required>
                </div>
            </div>   
            <button type="submit" class="btn btn-info m-3">Submit</button> 
        </form>
    </div>
    @push('script')
    @endpush
</x-layout>