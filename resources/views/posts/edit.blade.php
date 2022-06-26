@extends ('layouts.main-app')

@section('styles')

@endsection

@section('content')

   <div class="row mt-5">
       <div class="col-md-8 mx-auto">
           <div class="card">
               <div class="card-body">
                   <h3 class="card-title">Modifier un article</h3>
                   <hr>
                    <form method="post" action="{{route('post.update',['id'=>$post->id])}}" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="titre">Titre*</label>
                          <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Titre">
                          <input type="hidden" name="_token" value="{{Session::token()}}">
                        </div>
                        <div class="form-group">
                            <label for="body">Description*</label>
                            <textarea class="form-control" name="body"  rows="10" cols="30">{{$post->body}}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="{{URL::to('images/'.$post->file)}}"  alt="" class="img-fluid rounded">
                        </div>
                        <div class="form-group">
                            <label for="file">Photo*</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
           </div>
       </div>
   </div>

@endsection

@section('scripts')
   
@endsection