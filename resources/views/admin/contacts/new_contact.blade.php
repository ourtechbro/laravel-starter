@extends('layouts.app')

@section('title')
    New Contact
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">
      <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="h3 mb-0 page-title">Add Contact</h2>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary">Save Change</button>
        </div>
      </div>
      <form>
        <hr class="my-4">
        <h5 class="mb-2 mt-4">Personal</h5>
        <p class="mb-4">Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus</p>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" class="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPhone">Phone</label>
            <input type="text" class="form-control" id="inputPhone">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="custom-placeholder">Date of Birth</label>
            <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="placeholder">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState5">Gender</label>
            <select id="inputState5" class="form-control">
              <option value="female">Female</option>
              <option value="male">Male</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputLang">Language</label>
            <select id="inputLang" class="form-control">
              <option value="en">English</option>
              <option value="fr">Français</option>
            </select>
          </div>
        </div>
        <hr class="my-4">
        <h5 class="mb-2 mt-4">Company</h5>
        <p class="mb-4">Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus</p>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="firstname">Company Name</label>
            <input type="text" id="firstname" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="lastname">Department</label>
            <input type="text" id="lastname" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress5">Address</label>
          <input type="text" class="form-control" id="inputAddress5">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="custom-zip">Zip code</label>
            <input class="form-control input-zip" id="custom-zip">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState5">Country</label>
            <select id="inputState5" class="form-control">
              <option valye="">Select country...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState5">State</label>
            <select id="inputState5" class="form-control">
              <option selected="">Choose state...</option>
              <option>...</option>
            </select>
          </div>
        </div>
        <hr class="my-4">
        <div class="form-row">
          <div class="col-md-6">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customPass" checked>
              <label class="custom-control-label" for="customPass">Create account and email generated password</label>
            </div>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary">Save Change</button>
          </div>
        </div>
      </form>
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
