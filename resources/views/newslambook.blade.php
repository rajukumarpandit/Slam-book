<x-layout>
    @push('style')
    <div class="container">
        <form action="/create" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-group m-2">
                <label for="slambook" class="form-label">User ID</label>
                <input type="text" name="userid" id="userid" class="form-control" value="{{ $userid }}" readonly>
            </div>
            <div class="form-group m-2">
                <label for="slambook" class="form-label">Slam book Name</label>
                <input type="text" name="slambook" id="slambook" class="form-control" placeholder="Enter Slam book name" required>
                <div class="invalid-feedback">
                    Please enter slam book name
                </div>
            </div>
            <div class="form-group m-2">
                    <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    @push('script')
    @endpush
</x-layout>