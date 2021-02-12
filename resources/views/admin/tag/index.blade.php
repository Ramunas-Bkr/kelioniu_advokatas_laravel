@extends('layouts.admin_layout ')

@section('title', 'Žymos')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">        
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Žymos</h1>
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
                      <th style="width: 5%">
                          ID
                      </th>
                      <th style="width: 65%">
                          Žymos pavadinimas
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($tags as $tag)
                       <tr>
                      <td>
                          {{ $tag["id"] }}
                      </td>
                      <td>
                          <h5 class="mb-0">
                              {{$tag["title"]}}
                          </h5>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('tag.edit', $tag["id"]) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Redaguoti
                          </a>
                          <form action="{{ route('tag.destroy', $tag["id"]) }}" method="POST" style="display: inline-block">
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