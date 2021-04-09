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
                    <h4>Members Board of Trustee</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Photo</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($bots as $bot)
                            <tr>
                              <td>{{ ucwords($bot->name) }}</td>
                              <td>{{ $bot->role }}</td>
                              <td>
                                <img alt="image" src="{{ asset('assets/images/staff/'.$bot->img) }}" width="35">
                              </td>
                              <td><a href="#" class="btn btn-primary"><span class="fa fa-edit"></span></a></td>
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