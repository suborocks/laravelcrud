@include('inc.header')
<div class="container">
    <div class="row">
        <legend>Read Article</legend>
        <p class="lead">{{$articles->title}}</p> <br><br>
        <p class="lead">{{$articles->description}}</p>
    </div>
</div>
@include('inc.footer')