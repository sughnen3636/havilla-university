@extends('layouts.admin')
    @section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Prospective students - Applied</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Course Applied</th>
                            <th>Country</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($prospects as $p)
                            <tr>
                              <td>
                                {{ $p->f_name }} {{ $p->l_name }} {{ $p->o_name??'' }}
                              </td>
                              <td>{{ $p->phone }}</td>
                              <td><a href="mailto:{{ $p->email }}">{{ $p->email }}</a></td>
                              <td>{{ $p->gender }}</td>
                              <td>{{ $p->course }}</td>
                              <td>
                                {{ $p->country }}
                              </td>
                              <td>
                                @if($p->doc_name)
                                  <a href="{{ route('download-zip', $p->id)}}" class="btn btn-primary" data-toggle="tooltip" title="Download zip file">
                                    <span class="fa fas fa-file-download"></span> 
                                  </a>
                                @else
                                  No upload
                                @endif
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        
            </div>
          </div>
        </div>
      </div>
@endsection