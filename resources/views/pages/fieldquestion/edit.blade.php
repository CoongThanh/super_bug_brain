@extends('pages.billing')
@section('content-fieldquestion')
<div class="card">
  <div class="card-header">Chỉnh sửa lĩnh vực</div>
  <div class="card-body">
      
      <form action="{{ url('fieldquestions/' .$fieldquestion->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fieldquestion->namefield}}" id="id" />
        <label>Tên lĩnh vực</label> 
        <input type="text" name="name" id="name" value="{{$fieldquestion->status}}" class="form-control"> 
        <div class="col-3 mb-3 form-group">
            <label>Trạng thái</label> 
              <select name="status" id="status" class="form-select px-1 ">
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <input type="submit" value="Update" class="btn btn-success"> 
    </form>
  
  </div>
</div>
@stop