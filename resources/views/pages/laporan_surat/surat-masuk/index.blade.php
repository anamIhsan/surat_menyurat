@extends('layouts.app')

@section('title')
    Laporan Surat Masuk
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title"> 
                                <i class="fas fa-table"></i> 
                                Data Laporan Surat Masuk
                            </h3>
                        </div>
                        <div class="card-body">
                            {{-- @if (Auth::user()->roles != 'WATCHER')
                            @endif --}}
                           
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Dari</th>
                                        <th>Perihal</th>
                                        <th>Klasifikasi</th>
                                        <th>Pegawai Yang Ditunjuk</th>
                                        <th>Action</th>
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
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="#showData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"     
                                            >
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_masuk_edit') }}">
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
                                                            <h4 class="modal-title">Delete Laporan Surat Masuk</h4>
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
                                        <td>3</td>
                                        <td>Umum</td>
                                        <td>Proposal</td>
                                        <td>Proposal</td>
                                        <td>22-22-2222</td>
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="#showData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip" 
                                            >
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_masuk_edit') }}">
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
                                                            <h4 class="modal-title">Delete Laporan Surat Masuk</h4>
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
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="#showData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip" 
                                            >
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_masuk_edit') }}">
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
                                                            <h4 class="modal-title">Delete Laporan Surat Masuk</h4>
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
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="#showData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip" 
                                            >
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('laporan_surat-surat_masuk_edit') }}">
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
                                                            <h4 class="modal-title">Delete Laporan Surat Masuk</h4>
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
                            {{-- Modal Show Data --}}
                            <div id="showData" class="modal fade">
                                <div class="modal-dialog col-sm-12">
                                    <div class="modal-content col-sm-12">
                                        <div class="modal-header bg-primary">						
                                            <h5 class="modal-title">
                                                <i class="fas fa-user"></i>
                                                Detail Laporan Surat Masuk
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>No Surat Masuk</th>
                                                <td>2021</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Surat Masuk</th>
                                                <td>22-22-2222</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Diterima</th>
                                                <td>22-22-2222</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
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