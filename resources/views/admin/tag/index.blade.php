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
                      <th style="width: 10%">
                          ID
                      </th>
                      <th style="width: 60%">
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
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Redaguoti
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Trinti
                          </a>
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