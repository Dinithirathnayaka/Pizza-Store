@extends('layouts.adminfrontend')

@section('content')

<div class="rightnav-header">
  <span class="ms-1 font-weight-bold light">Product Details</span>
<div style="margin-left: 80%"> <img src="{{ asset('images/adminuser.png') }}"   class="signinicon" alt="main_logo"> <span>Sign In</span></div>

</div>
<hr style="color: #fff"/>
<div class="product">

   

    <table class="table  text-center" border="2" style="width: 100%">
    

        <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product_ID</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Discount</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>
                 001
                </td>
                <td>
                    <img src="{{ asset('images/pizza-7.jpg') }}" alt="Product Image"  class="productimg">
                </td>
                <td >
                  Cheese Pizza
                </td>
                <td >
                  5%
                </td>
                <td >
                  Rs1000.00
                </td>
                <td >
                 
                   <button class="edit">Edit</button>
                   <button class="delete">Delete</button>
                  </td>
              </tr>
          </tbody>
          <tbody>
            <tr>
                <td>
                 001
                </td>
                <td>
                    <img src="{{ asset('images/pizza-7.jpg') }}" alt="Product Image"  class="productimg">
                </td>
                <td >
                  Cheese Pizza
                </td>
                <td >
                  5%
                </td>
                <td >
                  Rs1000.00
                </td>
                <td >
                   <button class="edit">Edit</button>
                   <button class="delete">Delete</button>
                  </td>
              </tr>
          </tbody>
     
    </table>

</div>

@endsection

@section('styles')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection