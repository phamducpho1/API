@extends('admin.master')
@section('content')
 <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('categories.store') !!}" method="POST">
                                      {{ csrf_field() }}
                                <fieldset>
  
                              <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name"  placeholder="Nhập name"   required />
                            </div>
                               
                            
                             
  
                                <label>Description</label> 
                                <textarea id="mota" name="description" cols="80" rows="10">                       
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