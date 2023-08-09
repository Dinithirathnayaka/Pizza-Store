@extends('layouts.adminfrontend')

@section('content')
<div class="rightnav-header">
    <span class="ms-1 font-weight-bold light">User Details</span>
  <div style="margin-left: 80%"> <a href="{{ route('admin.login') }}"><img src="{{ asset('images/adminuser.png') }}"   class="signinicon" alt="main_logo"> <span>Sign In</a></span></div>
  
  </div>
  <hr style="color: #fff"/>


<div class="user">
   
       
    
        <table class="table  text-center" border="2" style="width: 100%">
        
    
            <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usere_ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Profile Picture</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>01</td>
                    <td><img src="{{ asset('images/person_3.jpg') }}" alt="Profile Picture"  class="profileimg"></td>
                    <td>Dinithi</td>
                    <td>dini@gmail.com</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                    <td>01</td>
                    <td><img src="{{ asset('images/person_3.jpg') }}" alt="Profile Picture"  class="profileimg"></td>
                    <td>Dinithi</td>
                    <td>dini@gmail.com</td>
                </tr>
              </tbody>
         
        </table>
    
    </div>
    

@endsection

@section('styles')
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection