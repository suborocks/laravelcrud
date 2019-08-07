@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{URL('/insert')}}" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>Laravel CRUD Application</legend>
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}

                    </div>
                    @endforeach
                    @endif
                    <div class="form-group row">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputImage">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{URL('/')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>

        </div>

    </div>
</div>

@include('inc.footer')