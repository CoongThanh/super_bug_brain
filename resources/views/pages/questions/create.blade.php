@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">Thêm câu hỏi</div>
  <div class="card-body">
      <form action="{{ url('question') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group ">
          <label>Nội dung câu hỏi</label> 
          <input type="text" name="fullcontent" id="fullcontent" class="form-control px-1" placeholder="Nhập nội dung câu hỏi"> 
        </div>
        <div class="row">                     
          <div class="mb-3 col-md-6 form-group">
              <label>Đáp án A</label> 
              <input type="text" name="answerA" id="answerA" class="form-control px-1" placeholder="Nhập đáp án A"> 
          </div>
            <div class="mb-3 col-md-6 form-group">
              <label>Đáp án B</label> 
              <input type="text" name="answerB" id="answerB" class="form-control px-1" placeholder="Nhập đáp án B"> 
          </div>
        </div>
        <div class="row">                     
          <div class="mb-3 col-md-6 form-group">
              <label>Đáp án C</label> 
              <input type="text" name="answerC" id="answerC" class="form-control px-1" placeholder="Nhập đáp án C"> 
          </div>
          <div class="mb-3 col-md-6 form-group">
              <label>Đáp án D</label> 
              <input type="text" name="answerD" id="answerD" class="form-control px-1" placeholder="Nhập đáp án D"> 
          </div>
        </div>
        <div class="form-group">
          <label>Đáp án đúng</label> 
         <input type="text" name="answer" id="answer" class="form-control px-1" placeholder="Nhập đáp án đúng"> 
        </div>
        <div class="row">                     
          <div class="mb-3 col-md-6 form-group">
              <label>Cấp độ</label> 
              <select name="fieldquestions_id	" id="fieldquestions_id	" class="form-select px-1">
                <option value="0">Dễ</option>
                <option value="1">Trung bình</option>
                <option value="2">Khó</option>
              </select>
          </div>
          <div class="mb-3 col-md-6 form-group">
              <label>Trạng thái</label> 
                <select name="status" id="status" class="form-select px-1 ">
                  <option value="1">Hoạt động</option>
                  <option value="0">Không hoạt động</option>
              </select>
          </div>
        </div>
        <input type="submit" value="Save" class="btn btn-success"> 
    </form>
  
  </div>
</div>
@stop