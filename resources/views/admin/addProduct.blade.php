@extends('admin.master')
@section('content')
 <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('products.store') !!}" method="POST">
                                      {{ csrf_field() }}
                                <fieldset>

                              <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name"  placeholder="Nhập name"   required />
                            </div>
                                <div class="form-group">
                                <label>Cate_id</label>
                                    <?php 
                                                $menu=DB::table('cates')->get();

                                             ?>     
                                   
                                              <div class="form-group">
                                                      <select class="form-control " name="cate_id">
                                                              @foreach( $menu as $mn)
                                                            <option>{{$mn->id}}</option>
                                                               @endforeach      
                                                      </select>
                                              </div>
                                            
                            </div>

                                <div class="form-group">
                                <label>price</label>
                                <input class="form-control" name="price"  placeholder="Nhập name"   required />
                            </div>
                             
                                <label>Content</label> 
                                <textarea id="mota" name="content" cols="80" rows="10">                       
                               </textarea>                        
                               <script>                  
                                   CKEDITOR.replace( 'mota' );                   
                               </script>  
                               <br>
                              <div class="form-actions">
                                <button type="submit" class="btn btn-primary" name="luu">Lưu</button>
                                <a href="{!! route('categories.index') !!}" class="btn btn-primary">Hủy</a>
                              </div>

                            </fieldset>
                            
                        <form>
                    </div>
                    
@endsection