@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4"> <!--size of the field -->
       <form>
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
   
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
      
  
               
       </form>
    </div>
</div>
@endsection
<!-- When you start a section and end it, the things inside it can pass to another page.
In this,the data is passed to the master page -->