
@extends('admin/layout/layout')


@section('container')

<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
            {{ csrf_field() }}
            <table <table id="table_id" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <thread>
                    <tr>
                        <th>Nama </th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Alamat</th>
                        <th>Fungsi</th>
                    </tr>
                    @foreach($listdata as $c)
                    <tr>
                        <td>{{$c->name }}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->role}}</td>
                        <td>{{$c->alamat}}</td>
                        <td>
                        <a href="/admin/userUpdate/{{$c->id}}"><button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="/admin/hapususer/{{$c->id}}"><button class="btn btn-sm btn-danger" id="right-panel-link" style="text-align:right"><i class="fa fa-trash" ></i></button>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </thread>
            </table>
        </form>
    </div>
</div>


@endsection
