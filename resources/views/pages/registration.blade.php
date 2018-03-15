@extends('layouts.default')
@section('content')    
<div class="container mycontainer">
  <form> 
    <center>
      <fieldset>
        <legend>Register</legend>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" class="form-control" id="Email" placeholder="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" class="form-control" id="Email" placeholder="email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" class="form-control" id="Password" placeholder="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <textarea placeholder="Address" class="form-control" id="address" rows="2"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
              Male
            </label>
          </div>
            <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
              Female
            </label>
          </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" class="form-control" id="contactno" placeholder="Contact No">
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-4">
            <button type="submit" class="btn btn-primary form-control">Register</button>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4"> 
            <button type="button" onclick="window.location='{{ url("/") }}'" class=" form-control btn btn-primary">Cancel</button>
        </div>
      </div> 
      </fieldset>
    </form>
    </center>
  </div>
@stop