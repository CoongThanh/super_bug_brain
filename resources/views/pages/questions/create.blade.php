@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">Thêm câu hỏi</div>
  <div class="card-body">
      
      <form action="{{ url('fieldquestion') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
          <label>Nội dung câu hỏi</label> 
          <input type="text" name="fullcontent" id="fullcontent" class="form-control" placeholder="Nhập nội dung câu hỏi"> 
        </div>
        <div class="form-group">
          <label>Đáp án A</label> 
          <input type="text" name="answerA" id="answerA" class="form-control" placeholder="Nhập đáp án A"> 
        </div>
        <div class="form-group">
          <label>Đáp án B</label> 
          <input type="text" name="answerB" id="answerB" class="form-control" placeholder="Nhập đáp án B"> 
        </div>
        <div class="form-group">
          <label>Đáp án C</label> 
          <input type="text" name="answerC" id="answerC" class="form-control" placeholder="Nhập đáp án C"> 
        </div>
        <div class="form-group">
          <label>Đáp án D</label> 
          <input type="text" name="answerD" id="answerD" class="form-control" placeholder="Nhập đáp án D"> 
        </div>
        <div class="form-group">
          <label>Đáp án</label> 
         <input type="text" name="answer" id="answer" class="form-control" placeholder="Nhập đáp án đúng"> 
        </div>
        <div class="form-group">
          <label>Cấp độ</label> 
           <select name="fieldquestions_id	" id="fieldquestions_id	" class="form-select">
             <option value="0">Dễ</option>
             <option value="1">Trung bình</option>
             <option value="2">Khó</option>
           </select>
         </div>
        <div class="form-group">
         <label>Trạng thái</label> 
          <select name="status" id="status" class="form-select">
            <option value="Hoạt động">Hoạt động</option>
            <option value="Không hoạt động">Không hoạt động</option>

          </select>
        </div>
        {{-- <label>Address</label> 
        <input type="text" name="address" id="address" class="form-control"> 
        <label>Mobile</label> 
        <input type="text" name="mobile" id="mobile" class="form-control">  --}}
        <input type="submit" value="Save" class="btn btn-success"> 
    </form>
  
  </div>
</div>
@stop