<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-4"> 
                <a href="/newslambook/{{session('user_id')}}" class="btn btn-info m-2">New Slam Book</a>
            </div>
            <div class="col-4">
                <a href="" class="btn btn-info m-2">Profile</a>
            </div>
            <div class="col-4">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-info m-2">LogOut</button>
                </form>
            </div>
        </div>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Question</th>
                    <th scope="col">Share</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                    <th scope="col">Edit View</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($slambook as $slambooks)
                <tr>
                    <th scope="row">{{ $slambooks->Slambook_id }}</th>
                    <th>{{$slambooks->Slambook_Name}}</th>
                    <td><a href="/add/{{ $slambooks->id }}" class="btn btn-info m-2">add </a></td>
                    <td><button class="btn btn-info m-2 " onclick="copylink()">Share</button></td>
                    <td><a href="" class="btn btn-info m-2">delete</a></td>
                    <td><a href="/view/{{$slambooks->id}}" class="btn btn-info m-2">View </a></td>
                    <td><a href="/editview/{{$slambooks->id}}" class="btn btn-info m-2">Edit View </a></td>
                    <td><a href="/editquestion/{{ $slambooks->id }}" class="btn btn-info m-2">Edit Question</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>