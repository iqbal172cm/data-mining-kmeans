<!-- @extends('admin.layouts.main')

@section('title', 'Admin')

@section('contents')
    <div class="container-fluid">
        <div class="col-md-8">
        <a href="{{ route('user_create') }}" class="btn btn-primary">Tambah Data</a>
        <br>
        <br>
            <table class="table table-bordered">
                <thead>
                    <td>no</td>
                    <td>nama</td>
                    <td>jabatan</td>
                    <td>No. Telpon</td>
                    <td>Email</td>
                </thead>

                <?php $no =1; ?>
                @foreach($user as $p)
                    <tbody>
                        <td>{{ $no++ }}</td>
                        <td>{{ $p->nama}}</td>
                        <td>{{ $p->jabatan}}</td>
                        <td>{{ $p->phone}}</td>
                        <td>{{ $p->emai}}</td>
                        <td><a href="{{ route('user_edit', ['id' => $p->id ]) }}">Edit</a></td>
                            <td>
                                <form action="{{ route('user_delete') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $p->id }}">
                                    <button>Hapus</button>
                                </form>
                            </td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection     -->