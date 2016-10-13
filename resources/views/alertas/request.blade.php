@if(count($errors)>0)
  <div class="alert alert-danger" role="alert" >
    <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span>
    </button>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{!!$error!!}</li>
      @endforeach
    </ul>
  </div>
@endif