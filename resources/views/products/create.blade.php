<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud basico Laravel 11 + MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">CRUD basico laravel 11 + MySql </h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('products.index')}}" class="btn btn-dark">Volver</a>
            </div>
       </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-3">
                    <div class="card-header bg-dark text-white">
                        <h3>Crear Producto</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h-5">Nombre</label>
                                <input value="{{old('name')}}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                            </div>
                            @error('name')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                            <div class="mb-3">
                                <label for="" class="form-label h-5">Sku</label>
                                <input value="{{old('sku')}}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku" name="sku">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                                 @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h-5">Precio</label>
                                <input value="{{old('price')}}" type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                                @error('price')
                                <p class="invalid-feedback">{{$message}}</p>
                                 @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h-5">Descripcion</label>
                                <textarea value="{{old('description')}}" class="form-control" placeholder="Descripcion" name="description" cols="30" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h-5">Imagen</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Price" name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>