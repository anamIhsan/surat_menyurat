@extends('layouts.app')

@section('title')
    Surat Keluar
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>  
                        ubah Surat Keluar
                    </h3>
                </div>
                <form action="" method="POST" class="form-horizontal">
                    {{-- @method('POST')
                    @csrf --}}
                  <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Teruskan Kepada</label>
                        <div class="col-sm-10">
                            <input 
                                type="text" 
                                class="form-control" 
                                placeholder="Penerima"
                                name="penerima"
                                value="{{ old('penerima') }}"     
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Perihal</label>
                      <div class="col-sm-10">
                        <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Perihal"
                            name="perihal"
                            value="{{ old('perihal') }}"    
                        >
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Surat Keluar &<br>Tanggal Diteruskan</label>
                        <div class="col-sm-5">
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input 
                                    type="text" 
                                    class="form-control datetimepicker-input" 
                                    data-target="#reservationdate"
                                    placeholder="Tanggal Surat Keluar"
                                    name="tanggal_surat_keluar"    
                                />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                <input 
                                    type="text" 
                                    class="form-control datetimepicker-input" 
                                    data-target="#reservationdate2"
                                    placeholder="Tanggal Diteruskan"
                                    name="tanggal_diteruskan"    
                                />
                                <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Klasifikasi Surat</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="gender">
                                <option disabled="disabled" selected="selected" class="form-control">-- pilih --</option>
                                <option value="LK">UMUM</option>
                                <option value="PR">PEMERINTAHAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Isi Ringkas</label>
                        <div class="col-sm-10">
                          <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Isi Ringkas"
                            name="isi_ringkas"
                            value="{{ old('isi_ringkas') }}"     
                        >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Catatan</label>
                        <div class="col-sm-10">
                          <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Catatan"
                            name="catatan"
                            value="{{ old('catatan') }}"     
                        >
                        </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('kelola_surat-surat_keluar') }}" class="btn btn-danger">Cancel</a>
                  </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()
    
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

         //Date picker
         $('#reservationdate2').datetimepicker({
            format: 'L'
        });
    
        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
            format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
            ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
            },
            function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )
    
        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })
    
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()
    
        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()
    
        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })
    
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    
        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    
        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false
    
        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)
    
        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })
    
        myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })
    
        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })
    
        myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })
    
        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
        })
    
        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
@endpush