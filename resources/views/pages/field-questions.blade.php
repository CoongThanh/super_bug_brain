<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Danh sách lĩnh vực"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Danh sách lĩnh vực"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Danh sách lĩnh vực</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class=" me-3 my-3 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Thêm lĩnh vực</a>
                            </div>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">
                                                Tên lĩnh vực</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Cấp độ</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Trạng thái</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1">
                                                   
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">1</h6>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-secondary text-xs font-weight-bold">Văn học</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">Dễ</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Hoạt động</span>
                                            </td>
                                            <!-- <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-secondary">Không hoạt động</span>
                                            </td> -->
                                            <td class="align-middle">
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            
                                                <button type="button" class="btn btn-danger btn-link"
                                                data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                       @foreach ($field as $lst)
                                       {{-- <a href="{{route('field_question.index')}}"></a> --}}
                                       <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                               
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $lst->id}}</h6>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <span class="text-secondary text-xs font-weight-bold">{{$lst->namefield}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$lst->level_id}}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{$lst->status}}</span>
                                        </td>
                                        <!-- <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Không hoạt động</span>
                                        </td> -->
                                        <td class="align-middle">
                                            <a rel="tooltip" class="btn btn-success btn-link"
                                                href="" data-original-title=""
                                                title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        
                                            <button type="button" class="btn btn-danger btn-link"
                                            data-original-title="" title="">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div>
                                            </button>
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
          
    
    </main>
    <x-plugins></x-plugins>

</x-layout>
