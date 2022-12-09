@extends('pages.billing')
@section('content-question')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Câu hỏi</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/questions/create') }}" class="btn btn-success btn-sm" title="Add New question">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nội dung câu hỏi</th>
                                        <th>A </th>
                                        <th>B</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>Đáp án</th>
                                        <th>Cấp độ </th>
                                        {{-- <th>Lĩnh vực </th> --}}
                                        <th>Trạng thái </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $item)
                                    <tr>
                                        <td class="px-4">{{ $loop->iteration }}</td>
                                        <td class="px-4">{{ $item->fullcontent }}</td>
                                        <td class="px-4">{{ $item->answerA }}</td>
                                        <td class="px-4">{{ $item->answerB }}</td>
                                        <td class="px-4">{{ $item->answerC }}</td>
                                        <td class="px-4">{{ $item->answerD }}</td>
                                        <td class="px-4">{{ $item->answer }}</td>
                                        <td class="px-4">{{ $item->fieldquestions_id }}</td> 
                                        <td class="px-4">{{ $item->status }}</td>
                                       
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection