@extends('layouts.admin_layout ')

@section('title', 'Koreguoti naujieną')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Koreguoti naujieną: {{ $post['title'] }}</h1>
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
              <form action="{{ route('post.update', $post['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="col-sm-8">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Naujienos antraštė</label>
                        <input value="{{ $post['title'] }}" type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Įveskite naujienos pavadinimą" required>
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pasirinkite žymą</label>
                            <select name="tag_id" class="custom-select" required>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag['id']}}" @if ($tag['id'] == $post['tag_id']) selected @endif>
                                        {{ $tag['title'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="feature_image">Pagrindinė nuotrauka</label>
                    <img src="{{ $post['img'] }}" alt="" class="img-uploaded mb-2" style="display: block; width:10%; height:auto">
                    <input class="form-control" type="text" id="feature_image" name="img" value="{{ $post['img'] }}" readonly>
                    <a href="" class="popup_selector" data-inputid="feature_image">Pasirinkite nuotrauką</a>
                  </div>
                  <div class="form-group">
                    <textarea name="text" class="editor" rows="25">{{ $post['text'] }}</textarea>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atnaujinti</button>
                </div>
              </form>
            </div>
        </div>
       </div>
    </section>
    <!-- /.content -->
@endsection