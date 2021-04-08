@extends('layouts.admin')
    @section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section" style="display: flex; justify-content: center; align-items: center;">
          <div class="section-body">
            <div>
              <div>
                <div class="card">
                  <div class="card-header">
                    <h4>Add staff</h4>
                    </div>
                  <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body row">
                      <div class="form-group col-md-6">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name')}}">
                        @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert" style="color: red !important;">
                            <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group col-md-6">
                        <label>Photo</label>
                        <input name="img" type="file" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" value="{{old('img')}}">
                        @if ($errors->has('img'))
                          <span class="invalid-feedback" role="alert" style="color: red !important;">
                            <strong>{{ $errors->first('img') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}">
                          {{old('bio')}}
                        </textarea>
                        @if ($errors->has('bio'))
                          <span class="invalid-feedback" role="alert" style="color: red !important;">
                            <strong>{{ $errors->first('bio') }}</strong>
                          </span>
                        @endif
                      </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection