@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{URL('/edit',array($articles->id))}}">
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
                        <input type="text" name="title" value="<?php echo $articles->title; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" placeholder="Description"><?php echo $articles->description; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{URL('/')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>

        </div>

    </div>
</div>

@include('inc.footer')