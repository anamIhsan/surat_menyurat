@extends('layouts.app')

@section('title')
    Data Pengguna
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
                                Data Pengguna
                            </h3>
                        </div>
                        <div class="card-body">
                            {{-- @if (Auth::user()->roles != 'WATCHER')
                            @endif --}}
                            <a class="btn btn-primary btn-md mb-2" href="{{ route('pengguna_create') }}">
                                <i class="fas fa-edit"></i>
                                Tambah Data
                            </a>
                           
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Jabatan</th>
                                        <th>NIP</th>
                                        <th>Level</th>
                                        <th>Email</th>
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
                                        <td>Memet</td>
                                        <td>Pegawai</td>
                                        <td>1002</td>
                                        <td>Pegawai</td>
                                        <td>Jamet</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('pengguna_edit') }}">
                                                <i class="fas fa-edit">
                                                    Edit
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash">
                                                    Delete
                                                </i>
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
                                                            <h4 class="modal-title">Delete Pengguna</h4>
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
                                        <td>Pepet</td>
                                        <td>Umum</td>
                                        <td>Proposal</td>
                                        <td>Proposal</td>
                                        <td>Ya</td> 
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('pengguna_edit') }}">
                                                <i class="fas fa-edit">
                                                    Edit
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash">
                                                    Delete
                                                </i>
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
                                                            <h4 class="modal-title">Delete Pengguna</h4>
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
                                        <td>Penting</td>
                                        <td>Banget</td>
                                        <td>Tidak</td> 
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('pengguna_edit') }}">
                                                <i class="fas fa-edit">
                                                    Edit
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash">
                                                    Delete
                                                </i>
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
                                                            <h4 class="modal-title">Delete Pengguna</h4>
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
                                        <td>Apa</td>
                                        <td>Kagak</td>
                                        <td>Belum</td> 
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('pengguna_edit') }}">
                                                <i class="fas fa-edit">
                                                    Edit
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" 
                                                href="#deleteData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"    
                                            >
                                                <i class="fas fa-trash">
                                                    Delete
                                                </i>
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
                                                            <h4 class="modal-title">Delete Pengguna</h4>
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