@extends('layouts.blank')
@section('title','使用者列表')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">會員資料</h4>
            <div class="row">
                <div class="col-12">
                        <!-- /.box-header -->
                            <table id="order-listing" class="table" cellspacing="0">
                                <tr>
                                    <th class="text-center" style="width: 10px;">id</th>
                                    <th class="text-center" style="width: 50px">相片</th>
                                    <th class="text-center" style="width: 250px">email</th>
                                    <th class="text-center" style="width: 120px">姓名</th>
                                    <th class="text-center" >地址</th>
                                    <th class="text-center" style="width: 150px" >電話號碼</th>
                                    <th class="text-center" style="width: 120px">生日</th>
                                </tr>
                                @foreach ($users as $user)

                                        <tr>
                                            <td>{{ $user->id }}.</td>
                                            <td>
                                                <img src="{{asset('images/user/'.$user->photo_path)}}" >
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone}}</td>
                                            <td>{{ $user->birthdate }}</td>


                                            <td class="text-center">
                                                @if(!$user->active)
                                                    <form action="{{ route('user.update', $user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-xs btn-danger">啟用</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>

                                @endforeach

                            </table>
                        <!-- /.box-body -->
                        {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

