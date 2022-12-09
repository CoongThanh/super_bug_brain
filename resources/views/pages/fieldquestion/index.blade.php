@extends('pages.billing')
@section('content-fieldquestion')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Lĩnh Vực</h3>
                    </div>
                    <div class="card-body">
                        {{-- @if (Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                        @endif --}}
                        <a href="{{ url('/fieldquestions/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên lĩnh vực</th>
                                        <th>Trạng thái</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fieldquestion as $item)
                                    <tr>
                                        <td class="px-4">{{ $loop->iteration }}</td>
                                        <td class="px-4">{{ $item->namefield }}</td>
                                        @if ($item->status == 1)
                                        <td class="px-4">Hoạt động</td>
                                        @else
                                        <td class="px-4">Không hoạt động</td>
                                        @endif
                                            
                                     
                                        <td>
                                            <a href="{{ url('/fieldquestions/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/fieldquestions/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
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