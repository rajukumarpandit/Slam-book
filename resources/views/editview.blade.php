<x-layout>
    @push('style')
    <div class="container">
        <h1 class="text-info text-center m-5 transform-capital">Edit {{$slam->Slambook_Name}}</h1>
        <form method="post" class="needs-validation" novalidate>
            @csrf
            <div class="row m-2">
                @foreach ($questions as $question)
                <div class="col-md-6 p-2">
                    <label for="" class="label-control">{{$question->Question_id}} {{$question->Question}}</label>
                    <div class="p-2 d-flex form-group">
                        <input type="text" name="answer[]" id="answer" class="form-control" value="{{$answer[$question->Question_id-1]->Answer}}" required>
                        <button formaction="/editview/{{$question->Question_id}}" class="btn btn-info text-white">Update</button>
                    </div>
                </div>
                @endforeach
            </div>
        </form>
    </div>
    @push('script')
    @endpush
</x-layout>