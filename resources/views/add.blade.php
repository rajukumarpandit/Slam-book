<x-layout>
    @push('style')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h3 class="m-5 text-info text-center">Note :-</h3>
                <p>you can add some questions in your own slam book</p>
            </div>
            <div class="col-md-6">
            <h3 class="m-5 text-info text-center">Add Questions</h3>
                <form action="/add" method="POST" class="needs-validation" novalidate>
                    @csrf    
                    <div class="form-group p-2">
                        <label for="slambookid" class="form-label">Slam Book ID</label>
                        <input type="text" name="slambookid" id="slambookid" class="form-control" value="{{ $slambookid }}" readonly>
                    </div>
                    <label for="question">Your Questions</label>
                    <div id="education_fields">

                    </div>
                    <div class="input-group p-2">
                        <input  type="text" class="form-control" id="question" name="question" required>
                        <div class="input-group-btn">
                        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="" aria-hidden="true">Add</span> </button>
                    </div>
                    <div class="invalid-feedback">
                    Please enter valid question
                    </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn bg-info text-white mb-3 mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('script')
    @endpush
</x-layout>