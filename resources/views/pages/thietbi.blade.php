@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dịch vụ'])
    @extends('pages.billing')
          <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Cau Hoi</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/thietbi/create') }}" class="btn btn-success btn-sm" title="Add New thietbi">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>Mã Thiết Bị</td>
                                        <td>Tên Thiết Bị</td>
                                        <td>Địa chỉ ip</td>
                                        {{-- <th>Dap An</th>
                                        <th>Dap An Sai</th> --}}
                                        <td>Trạng Thái Kết Nối</td>
                                        <td>Dịch Vụ Kêt nối</td>
                                        <td>chức năng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($thietbi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($item->statushd==1)
                                            <span style="color: green;">Văn Học</span>
                                            @elseif ($item->statushd==2)
                                            <span style="color: rgb(110, 221, 238);">Thể Thao</span>
                                            @else
                                            <span style="color: red;">Tin Học</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->thietbi }}</td>
                                        {{-- <td>{{ $item->correct_answer }}</td>
                                        <td>{{ $item->incorrect_answer }}</td> --}}
                                        <td>
                                            @if ($item->statuskn==1)
                                            <span style="color: green;">Hoạt Động</span>
                                            @else
                                            <span style="color: red;">Không Hoạt Động</span>
                                            @endif
                                            </td></td>

                                        <td>
                                            <a href="{{ url('/thietbi/' . $item->id) }}" title="View thietbi"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/thietbi/' . $item->id . '/edit') }}" title="Edit thietbi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/thietbi' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete thietbi" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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

