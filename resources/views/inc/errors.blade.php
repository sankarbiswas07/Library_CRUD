@if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Attention!!! </strong>{{ $error }}
        </div>
  @endforeach
@endif

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger">
{{session('danger')}}
</div>
@endif