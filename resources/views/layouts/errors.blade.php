@if(count($errors))
<div class="form-group">
  @foreach ($errors->all() as $error)
    <p class="alert alert-danger">
      {{ $error }}
    </p>
  @endforeach
</div>
@endif
