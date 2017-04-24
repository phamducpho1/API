@extends('admin.master')
@section('content')
<div class="col-lg-12">
                        <h1 class="page-header">Cates
                            <small>List</small>
                        </h1>
                    </div>
  <div class="box-content">
    <a href="{!! route('categories.create') !!}"  style="color: green">Thêm Categories</a><br><br>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>order</th>
                          <th>Parent_id</th>
                         
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>   
                     
                        </table>
@endsection