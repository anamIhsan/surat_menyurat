@extends('layouts.app')

@section('title')
    Klasifikasi Surat
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
                                Data Klasifikasi Surat
                            </h3>
                        </div>
                        <div class="card-body">
                            {{-- @if (Auth::user()->roles != 'WATCHER')
                            @endif --}}
                            <a class="btn btn-primary btn-md mb-2" href="{{ route('master_surat-klasifikasi_surat_create') }}">
                                <i class="fas fa-edit"></i>
                                Tambah Data
                            </a>
                           
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Klasifikasi</th>
                                        <th>Nama Klasifikasi</th>
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
                                        <td>Dinas A</td>
                                        <td>Umum</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('master_surat-klasifikasi_surat_edit') }}">
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
                                                            <h4 class="modal-title">Delete Klasifikasi Surat</h4>
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
                                        <td>Dinas A</td>
                                        <td>Umum</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('master_surat-klasifikasi_surat_edit') }}">
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
                                                            <h4 class="modal-title">Delete Klasifikasi Surat</h4>
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
                                        <td>Dinas b</td>
                                        <td>Rahasia</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('master_surat-klasifikasi_surat_edit') }}">
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
                                                            <h4 class="modal-title">Delete Klasifikasi Surat</h4>
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
                                        <td>Kelas A</td>
                                        <td>Biasa</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('master_surat-klasifikasi_surat_edit') }}">
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
                                                            <h4 class="modal-title">Delete Klasifikasi Surat</h4>
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