@extends('layouts.app')

@section('title')
    Disposisi
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
                                Disposisi
                            </h3>
                        </div>
                        <div class="card-body">
                            {{-- @if (Auth::user()->roles != 'WATCHER')
                            @endif --}}
                            <a class="btn btn-primary btn-md mb-2" href="{{ route('kelola_surat-surat_masuk') }}">
                                <i class="fas fa-edit"></i>
                                Back
                            </a>
                           
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Harap</th>
                                        <th>Pegawai Yang Ditunjuk</th>
                                        <th>Catatan Admin Tu</th>
                                        <th>Catatan Kepala Dinas</th>
                                        <th>Verifikasi</th>
                                        <th>Tanggal Verifikasi  </th>
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
                                        <td>Proposal</td>
                                        <td>Proposal</td>
                                        <td>22-22-2222</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" 
                                                href="#showData"
                                                data-toggle="modal" 
                                                data-toggle="tooltip"     
                                            >
                                                <i class="fas fa-eye">
                                                    Lihat
                                                </i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('kelola_surat-disposisi_edit') }}">
                                                <i class="fas fa-edit">
                                                    Edit
                                                </i>
                                            </a>
                                        </td>
                                        {{-- @if (Auth::user()->roles != 'WATCHER')
                                        @endif --}}
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
                                                Detail Disposisi
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Klasifikasi</th>
                                                <td>UMUM</td>
                                            </tr>
                                            <tr>
                                                <th>Pegawai</th>
                                                <td>Pepet</td>
                                            </tr>
                                            <tr>
                                                <th>Perihal</th>
                                                <td>Permohonan Layanan</td>
                                            </tr>
                                            <tr>
                                                <th>Isi Ringkas</th>
                                                <td>Tentang Permohonan Surat</td>
                                            </tr>
                                            <tr>
                                                <th>Dari</th>
                                                <td>Dinas A</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Surat Masuk</th>
                                                <td>22-22-2222</td>
                                            </tr>
                                            <tr>
                                                <th>No Surat Masuk</th>
                                                <td>2021</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Diteruskan</th>
                                                <td>23-11-01</td>
                                            </tr>
                                            <tr>
                                                <th>Catatan</th>
                                                <td>Catatan Pengolah</td>
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