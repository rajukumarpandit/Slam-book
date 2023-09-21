<x-layout>
    <div class="container">
        <h1 class="m-5 text-center text-info">{{$slam->Slambook_Name}}</h1>
        <table class="table table-border">
            <thead>
                <tr>
                <th scope="col">SN</th>
                <th scope="col">paragraaph</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr>
                <th scope="row" rowspan="2">{{$question->Question_id}}</th>
                <td>{{$question->Question}}</td>    
                </tr>
                
                <tr>
                    <td>{{$answer[$question->Question_id-1]->Answer}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <input type="button" class="btn btn-info text-white m-3" value="Back">
            <input type="button" class="btn btn-info text-white m-3" value="Share">
    </div>
</x-layout>