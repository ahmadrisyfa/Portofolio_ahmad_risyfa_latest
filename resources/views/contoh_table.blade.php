@extends('template.admin.index')
@section('content_admin')
<div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="card-body">
        <h5 class="card-title">Recent Sales <span>| Today</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Customer</th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">#2457</th>
              <td>Brandon Jacob</td>
              <td >At praesentium minu</td>
              <td>$64</td>
              <td><span class="badge bg-success">Approved</span></td>
            </tr>        
          </tbody>
        </table>

      </div>

    </div>
  </div>
@endsection