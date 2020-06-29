@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">Editar mi imagen</div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('image.update')}}">
                            @csrf

                            <input type="hidden" name="image_id" value="{{$image->id}}">

                            <div class="form-group row">
                                <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                                <div class="col-md-7">
                                    <input id="image_path" type="file" name="image_path" class="form-control {{$errors->has('image_path') ? 'is-invalid' : '' }}" required>

                                    @if($errors->has('image_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('image_path')}}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-3 col-form-label text-md-right">Descripcion</label>
                                <div class="col-md-7">

                                    @if($image->user->image)
                                        <div class="container-avatar">
                                            <img src="{{ route('image.file', ['filename' => $image->image_path] )}}" class="avatar">
                                        </div>
                                    @endif

                                    <textarea id="description" name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : '' }}"
                                              required>{{$image->description}}</textarea>

                                    @if($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('description')}}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group row offset-md-3">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" value="Actualizar imagen">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
