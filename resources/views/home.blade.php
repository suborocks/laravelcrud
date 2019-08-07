@include('inc.header')
<div class="container">
    <div class="row">
        <legend>Laravel CRUD Application</legend>
        <div class="row">
            <div class="col-md-6 ">
                @if(session('info'))
                <div class="alert alert-success">
                    {{session('info')}}
                </div>
                @endif

            </div>
        </div>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @if(count($articles)>0)
                @foreach($articles->all() as $article)
                <tr class="table-active">
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->description}}</td>
                    <td>

                        <img src='{{url("/uploads/".$article->image)}}' class="image">
                    </td>
                    <td>
                        <a href='{{URL("/read/{$article->id}")}}' class="btn btn-primary">Read</a>|
                        <a href='{{URL("/update/{$article->id}")}}' class="btn btn-success">Update</a>|
                        <a href='{{URL("/delete/{$article->id}")}}' class="btn btn-danger">Delete</a>|
                    </td>

                </tr>
                @endforeach

                @endif

            </tbody>
        </table>

    </div>
</div>

@include('inc.footer')