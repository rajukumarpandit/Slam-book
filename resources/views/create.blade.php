<x-layout>
    @push('style')
    <div class="container">
        <h3 class="m-5 text-info text-center">Your Slam Book</h3>
        <form action="/answer" method="POST" class="needs-validation" novalidate>
        @csrf
            <div class="row">
            @foreach ($questions as $question)
                <div class="col-md-6 p-2">
                    <input type="hidden" name="slambookid[]" value="{{$question->Slambook_id}}" readonly>
                    <input type="hidden" name="questionid[]" value="{{$question->Question_id}}" readonly>
                    <label for="question" class="form-label">{{$question->Question_id}} {{$question->Question}}</label>
                    <input type="text" name="answer[]" id="answer" class="form-control">
                    <div class="invalid-feedback">
                        Please enter valid book name
                    </div>
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn bg-info text-white m-3">Submit</button>
        </form>
    </div>
    @push('script')
    @endpush
</x-layout>