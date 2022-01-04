@extends('layouts.app')

@section('title')
    Laporan Surat Keluar
@endsection

@section('title page')
    Laporan Surat Keluar
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- @if (Auth::user()->roles != 'WATCHER')
                            @endif --}}
                           
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat Keluar</th>
                                        <th>Dikirim Kepada</th>
                                        <th>Tanggal Dikirim</th>
                                        <th>Nama Penerima</th>
                                        <th>Perihal</th>
                                        <th>Aksi</th>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                        $no = 1
                                    @endphp
                                    @foreach ($kk as $data)
                                    @endforeach --}}
                                    <tr>
                                        <td>1</td>
                                        <td>Umum</td>
                                        <td>Proposal</td>
                                        <td>Proposal</td>
                                        <td>22-22-2222</td>
                                        <td>22-22-2222</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_keluar_edit') }}">
                                                <i class="fas fa-edit"></i>
                                                Ubah
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash"></i>
                                                Hapus
                                            </a>
                                        </td>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
                                        {{-- Modal Delete Data --}}
                                        <div id="deleteData" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form class="d-inline-block" action="" method="POST">
                                                        {{-- @csrf
                                                        @method('DELETE') --}}
                                                        <div class="modal-header">						
                                                            <h4 class="modal-title">Hapus Laporan Surat Keluar</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">					
                                                            <p>Apakah Anda yakin ingin menghapus data <strong></strong> ?</p>
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
                                    <tr>
                                        <td>3</td>
                                        <td>Umum</td>
                                        <td>Proposal</td>
                                        <td>Proposal</td>
                                        <td>22-22-2222</td>
                                        <td>22-22-2222</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_keluar_edit') }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
                                        {{-- Modal Delete Data --}}
                                        <div id="deleteData" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form class="d-inline-block" action="" method="POST">
                                                        {{-- @csrf
                                                        @method('DELETE') --}}
                                                        <div class="modal-header">						
                                                            <h4 class="modal-title">Delete Laporan Surat Keluar</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">					
                                                            <p>Are you sure you want to delete data <strong></strong> ?</p>
                                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <button type="submit" class="btn btn-danger btn-small">delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Rahasia</td>
                                        <td>Penting</td>
                                        <td>Banget</td>
                                        <td>11-11-1111</td>
                                        <td>11-11-1111</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_keluar_edit') }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
                                        {{-- Modal Delete Data --}}
                                        <div id="deleteData" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form class="d-inline-block" action="" method="POST">
                                                        {{-- @csrf
                                                        @method('DELETE') --}}
                                                        <div class="modal-header">						
                                                            <h4 class="modal-title">Delete Laporan Surat Keluar</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">					
                                                            <p>Are you sure you want to delete data <strong></strong> ?</p>
                                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <button type="submit" class="btn btn-danger btn-small">delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Biasa</td>
                                        <td>Apa</td>
                                        <td>Kagak</td>
                                        <td>33-33-3322</td>
                                        <td>33-33-3322</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_keluar_edit') }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
                                        {{-- Modal Delete Data --}}
                                        <div id="deleteData" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form class="d-inline-block" action="" method="POST">
                                                        {{-- @csrf
                                                        @method('DELETE') --}}
                                                        <div class="modal-header">						
                                                            <h4 class="modal-title">Delete Laporan Surat Keluar</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">					
                                                            <p>Are you sure you want to delete data <strong></strong> ?</p>
                                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <button type="submit" class="btn btn-danger btn-small">delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                    </tr>
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

    <script src="{{ asset('dist/js/alert/sweetalert2.min.js') }}"></script>
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