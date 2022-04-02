@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
    <form>
  <div class="mb-3">
    <label for="title" class="form-label">Nombre</label>
    <input type="text" name="title" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

</div>
@endsection