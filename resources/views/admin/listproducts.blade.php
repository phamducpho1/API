@extends('admin.master')
@section('content')
<div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
  <div class="box-content">
    <a href=""  style="color: green">Thêm Product</a><br><br>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Content</th>
                          <th>image</th>
                          <th>Parent ID</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>   
                        <tbody>
                                @foreach( $show as $sh)
                                <tr>
                                        <td>{{$sh->id}}</td>
                                        <td>{{$sh->name}}</td>
                                        <td>{{$sh->price}}</td>
                                        <td>{{$sh->content}}</td>
                                        <td><img src="{!!asset('img/'.$sh['image']) !!}" width="60px;" height="50px" alt=""></td>             
                                        <td>{{$sh->cate_id}}</td>
                                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Sửa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="$sh->id"   >Xóa</a></td>
                                </tr>
                        @endforeach
                        </tbody>
    
                        </table>
@endsection