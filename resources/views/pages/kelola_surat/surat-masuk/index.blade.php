@extends('layouts.app')

@section('title')
    Surat Masuk
@endsection

@section('title page')
    Surat Masuk
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if(Auth::user()->roles == "SUPER ADMIN" || Auth::user()->roles == "ADMIN")
                                <a class="btn btn-info btn-md mb-2" href="{{ route('kelola_surat-surat_masuk_create') }}">
                                    <i class="fas fa-plus-square"></i>
                                    &nbsp;
                                    Tambah
                                </a>
                            @endif 
                           
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Dari</th>
                                        <th>Klasifikasi</th>
                                        <th>No Surat</th>
                                        <th>Perihal</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1
                                    @endphp
                                    @foreach ($s_masuk as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->dari }}</td>
                                            <td>{{ $data->klasifikasi->name }}</td>
                                            <td>{{ $data->no_surat }}</td>
                                            <td>{{ $data->perihal }}</td>
                                            <td>{{ $data->tanggal_masuk }}</td>
                                            <td>
                                                <a class="btn btn-success btn-sm"
                                                    href="#showData{{ $data->id }}"
                                                    data-toggle="modal" 
                                                    data-toggle="tooltip"     
                                                >
                                                    <i class="fas fa-eye">
                                                        Detail
                                                    </i>
                                                </a>
                                                {{-- Modal Show Data --}}
                                                <div id="showData{{ $data->id }}" class="modal fade">
                                                    <div class="modal-dialog col-sm-12">
                                                        <div class="modal-content col-sm-12">
                                                            <div class="modal-header bg-primary">						
                                                                <h5 class="modal-title">
                                                                    Detail Surat Masuk
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th>Dari</th>
                                                                    <td>{{ $data->dari }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Surat</th>
                                                                    <td>{{ $data->no_surat }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Surat Masuk</th>
                                                                    <td>{{ $data->tanggal_masuk }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Perihal</th>
                                                                    <td>{{ $data->perihal }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Klasifikasi Surat</th>
                                                                    <td>{{ $data->klasifikasi->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Sifat Surat</th>
                                                                    <td>{{ $data->sifat->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Catatan</th>
                                                                    <td>{{ $data->catatan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Lampiran Surat</th>
                                                                    <td>
                                                                        <a href="/lampiran_surat/{{ $data->lampiran_surat }}" target="blank">
                                                                            {{ $data->lampiran_surat }}
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Diterima</th>
                                                                    <td>{{ $data->diterima }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if(Auth::user()->roles == "SUPER ADMIN" || Auth::user()->roles == "ADMIN")
                                                    <a class="btn btn-warning btn-sm" href="{{ route('kelola_surat-surat_masuk_edit', $data->id) }}">
                                                        <i class="fas fa-edit">
                                                            Ubah
                                                        </i>
                                                    </a>
                                                @endif

                                                <a class="btn btn-info btn-sm" href="{{ route('kelola_surat-disposisi', $data->id) }}">
                                                    <i class="fas fa-check-square">
                                                        Disp
                                                    </i>
                                                </a>

                                                @if(Auth::user()->roles == "SUPER ADMIN" || Auth::user()->roles == "ADMIN")
                                                    <a class="btn btn-danger btn-sm" 
                                                        href="#deleteData{{ $data->id }}"
                                                        data-toggle="modal" 
                                                        data-toggle="tooltip"    
                                                    >
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                @endif
                                            </td>
                                            {{-- @if (Auth::user()->roles != 'WATCHER')
                                            @endif --}}
                                            {{-- Modal Delete Data --}}
                                            <div id="deleteData{{ $data->id }}" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form class="d-inline-block" action="{{ route('kelola_surat-surat_masuk_delete', $data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-header">						
                                                                <h4 class="modal-title">Hapus Surat Masuk</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body">					
                                                                <p>Apakah Anda yakin ingin menghapus data <strong>{{ $data->dari }}</strong> ?</p>
                                                                <p class="text-warning"><small>Tindakan ini tidak bisa dibatalkan.</small></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                                                                <button type="submit" class="btn btn-danger btn-small">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });
    </script>

    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    {{-- alert success add --}}
    <script>
        if ({{session()->has('notification-success-add')}}) {
            Swal.fire({
                icon: 'success',
                title: 'SUCCESS',
                text: 'Data berhasil di tambah!'
                })
        }    
    </script>
    {{-- alert success edit --}}
    <script>
        if ({{session()->has('notification-success-edit')}}) {
            Swal.fire({
                icon: 'success',
                title: 'SUCCESS',
                text: 'Data berhasil di edit!'
                })
        }    
    </script>
    {{-- alert success delete --}}
    <script>
        if ({{session()->has('notification-success-delete')}}) {
            Swal.fire({
                icon: 'success',
                title: 'SUCCESS',
                text: 'Data berhasil di hapus!'
                })
        }
    </script>
@endpush