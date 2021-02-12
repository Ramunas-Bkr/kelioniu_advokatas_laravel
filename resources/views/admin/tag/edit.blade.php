@extends('layouts.admin_layout ')

@section('title', 'Koreguoti žymą')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Koreguoti "{{$tag['title']}}" žymą</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          @if (session('success'))
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
              </div>
          @endif
        <div class="row">
            <div class="col-lg-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form action="{{ route('tag.update', $tag['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pavadinimas</label>
                    <input value="{{$tag['title']}}" type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Įveskite žymos pavadinimą" required>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atnaujinti</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
        </div>
       </div>
    </section>
    <!-- /.content -->
@endsection