@extends('home.layouts.main')

@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
  {{-- <h5 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">
        ODC Main /</span>Add Data</h5> --}}

      

      {{-- notifikasi sukses --}}
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        </div>
      @endif

       {{-- notifikasi error --}}
      @if (isset($errors) && $errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
              {{ $error }}
            @endforeach
        </div>
      @endif

      {{-- notifikasi error --}}
        @if(session()->has('failures'))
        
          <table class="table table-warning">
            <tr>
              <th>Row</th>
              <th>Attribute</th>
              <th>Error</th>
              <th>Value</th>
            </tr>
            @foreach(session()->get('failures') as $f)
              <tr>
                <td>{{ $f->row() }}</td>
                <td>{{ $f->attribute() }}</td>
                <td>
                  <ul>
                    @foreach ($f->errors() as $err)
                      <li>{{ $err }}</li>
                    @endforeach
                  </ul>
                </td>
                <td>{{ $f->values()[$f->attribute()] }}</td>
              </tr>
            @endforeach
          </table>
        @endif


      <div class="row">
      <div class="col-lg-8 mb-4 order-0">
      
        
          <div class="col-lg-8 order-0">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-sm-8">
                  <div class="card-body">
                    <h5 class="card-title text-secondary fw-bold">Import Excel ODC Main</h5>
                    <p class="mb-4">
                      Please adjust to the format provided!
                    </p>

                    
                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#importExcel">
                      IMPORT EXCEL <i class="bx bx-list-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
     

            <!-- Import modal Excel -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <form method="post" action="{{ route('odcmain.import') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                      <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                      ></button>
                    </div>
                    <hr>
                    <div class="modal-body">
        
                      <label for="formFile" class="form-label">Select excel file</label>
                      <div class="form-group">
                        <input class="form-control" type="file" name="file" required="required">
                      </div>
        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

    {{-- Import Excel End --}}
            
          </div>
        </div>
      </div>
      
    <!-- Responsive Table -->
    
      <div class="card mb-4">
        <div class="card-body">
          {{-- <h5 class="card-header">ODC Data Main</h5> --}}
          <div class="table-responsive text-nowrap">
            <table id="data" class="table table-striped table-bordered">
    
            <thead class="table-dark">
              <tr>
                <th class="text-light">NO</th>
                <th class="text-light">ODC NAME</th>
                <th class="text-light">ID</th>
                <th class="text-light">STO</th>
                <th class="text-light">SEGMENT FEEDER OLD</th>
                <th class="text-light">SEGMENT FEEDER NEW</th>
                <th class="text-light">LAT</th>
                <th class="text-light">LONG</th>
                <th class="text-light">ADDRESS</th>
                <th class="text-light">KOORDINAT</th>
                <th class="text-light">INFO</th>
                <th class="text-light">UPDATED BY</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($odcmain as $o)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{$o->name}}</td>
                <td>{{$o->id}}</td>
                <td>{{$o->sto}}</td>
                <td>{{$o->segment_feeder_old}}</td>
                <td>{{$o->segment_feeder_new}}</td>
                <td>{{$o->lat}}</td>
                <td>{{$o->long}}</td>
                <td>{{$o->address}}</td>
                <td>{{$o->koordinat}}</td>
                <td>{{$o->info}}</td>
                <td>{{$o->updated_by}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      </div>
    
          
    <!--/ Responsive Table -->
    
</div>



  @endsection