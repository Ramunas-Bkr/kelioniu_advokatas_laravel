@extends('layouts.admin_layout ')

@section('title', 'Atsiliepimai')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">        
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Atsiliepimai</h1>
          </div>
        </div><!-- /.row -->
         @if (session('success'))
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
              </div>
          @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 2%">
                          ID
                      </th>
                      <th style="width: 12%">
                          Autorius
                      </th>
                      <th style="width: 18%">
                          Titulas
                      </th>
                      <th style="width: 33%">
                          Atsiliepimas
                      </th>
                      <th style="width: 7%">
                          Nuotrauka
                      </th>
                      <th style="width: 3%">
                          Žvaigždutės
                      </th>
                      <th style="width: 25%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($testimonials as $testimonial)
                       <tr>
                      <td>
                          {{ $testimonial["id"] }}
                      </td>
                      <td>
                          <p class="mb-0">
                              {{$testimonial["name"]}}
                          </p>
                      </td>
                      <td>
                          <p class="mb-0">
                              {{$testimonial['title']}}
                          </p>
                      </td>
                      <td>
                          <p class="mb-0">
                              {{$testimonial['text']}}
                          </p>
                      </td>
                      <td>
                          <img src="/{{ $testimonial['image'] }}" alt="" class="img-uploaded mb-0" style="display: block; width:100%; height:auto">
                      </td>
                      <td>
                          <p class="mb-0" style="text-align: center">
                              {{$testimonial['stars']}}
                          </p>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('testimonial.edit', $testimonial["id"]) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Redaguoti
                          </a>
                          <form action="{{ route('testimonial.destroy', $testimonial["id"]) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Trinti
                            </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
    <!-- /.content -->
@endsection