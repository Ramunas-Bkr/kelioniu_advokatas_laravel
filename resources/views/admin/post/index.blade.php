@extends('layouts.admin_layout ')

@section('title', 'Naujienos')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">        
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Naujienos</h1>
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
                      <th style="width: 40%">
                          Naujienos antraštė
                      </th>
                      <th style="width: 15%">
                          Naujienos žyma
                      </th>
                      <th style="width: 18%">
                          paskelbimo data
                      </th>
                      <th style="width: 25%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($posts as $post)
                       <tr>
                      <td>
                          {{ $post["id"] }}
                      </td>
                      <td>
                          <p class="mb-0">
                              {{$post["title"]}}
                          </p>
                      </td>
                      <td>
                          <p class="mb-0">
                              {{$post->tag['title']}}
                          </p>
                      </td>
                      <td>
                          <p class="mb-0">
                              {{$post['created_at']}}
                          </p>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('post.edit', $post["id"]) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Redaguoti
                          </a>
                          <form action="{{ route('post.destroy', $post["id"]) }}" method="POST" style="display: inline-block">
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