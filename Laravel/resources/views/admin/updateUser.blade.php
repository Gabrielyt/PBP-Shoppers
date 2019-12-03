@extends('admin/layout/layout')


@section('container')

<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
        <form method="post" action="/admin/userUpdate" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table <table id="table_id" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <thread>
                    @foreach($tampilupdate as $c)
                    <input type="hidden" name="id" value="{{ $c->id }}">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="name" value="{{$c->name}}" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="{{$c->email}}" required></td>
                    </tr>

                    <tr>
                        <td>Role</td>
                        <td><input type="text" name="role" value="{{$c->role}}" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
A                        <td><input type="text" name="alamat" value="{{$c->alamat}}" required></td>
                    </tr>

                    @endforeach
                </thread>
            </table>
            <center>
                <button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right">Update</button>
            </center>
        </form>
    </div>
</div>

@endsection
