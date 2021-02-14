@extends('layouts.admin_layout ')

@section('title', 'Koreguoti atsiliepimą')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Koreguoti {{$testimonial['name']}} atsiliepimą</h1>
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
              <form action="{{ route('testimonial.update', $testimonial['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="col-sm-8">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vardas</label>
                        <input value="{{$testimonial['name']}}" type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Atsiliepimo autoriaus vardas" required>
                    </div>
                  </div>
                  <div class="col-sm-8">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titulas</label>
                        <input value="{{$testimonial['title']}}" type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Atsiliepimo autoriaus titulas (jei yra)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="feature_image">Nuotrauka</label>
                    <img src="/{{ $testimonial['image'] }}" alt="" class="img-uploaded mb-0" style="display: block; width:20%; height:auto">
                    <input class="form-control" type="text" id="feature_image" name="image" value="" readonly hidden>
                    <a href="" class="popup_selector" data-inputid="feature_image">Pakeisti nuotrauką</a>
                  </div>
                  <div class="form-group">
                    <textarea name="text" class="editor" rows="10" placeholder="Įrašyti atsiliepimą">{{ $testimonial['text'] }}</textarea>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-1">
                            <label>Žvaigždučių kiekis</label>
                            <select name="stars" class="custom-select" required>
                                    <option value=1 @if ($testimonial['stars'] === 1) selected @endif>1</option>
                                    <option value=2 @if ($testimonial['stars'] === 2) selected @endif>2</option>
                                    <option value=3 @if ($testimonial['stars'] === 3) selected @endif>3</option>
                                    <option value=4 @if ($testimonial['stars'] === 4) selected @endif>4</option>
                                    <option value=5 @if ($testimonial['stars'] === 5) selected @endif>5</option>
                            </select>
                    </div>
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