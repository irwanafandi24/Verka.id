@extends('engine')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@section('content')

@if($show == 'index')
<br>
@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
<div class="col-md-12">
  <div class="row">
    <div class="container">
      <!-- Header -->
      <div class="card index-header">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-6">
              <div class="text-left">
                  <p class="header-user-index">Data Fotografer</p>
              </div>
            </div>
            <div class="col-md-6 col-6">
              <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fotograferBaru">
                  Fotografer Baru
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <!-- Table -->
          <div class="table-responsive">
            <table id="myTable" class="display table table-sm">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Status Slot 1</th>
                        <th>Status Slot 2</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_fotografer as $fotografer)
                    <tr>
                        <td>{{ $fotografer->nama }}</td>
                        <td>{{ $fotografer->slot1 }}</td>
                        <td>{{ $fotografer->slot2 }}</td>
                        <td>
                            <a href="fotografer/edit/{{ $fotografer->id }}" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#hapusFotografer-{{ $fotografer->id }}" href="" role="button">Hapus</a>
                            <!-- Modal Hapus User -->
                            <div class="modal fade" id="hapusPasien-{{ $fotografer->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusFotografer" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Hapus Fotografer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="delete-image-canvas text-center">
                                      <img src="img/delete-alert.svg"class="" alt="">
                                      <p>Apakah anda yakin ingin menghapus</p>
                                      <h5>
                                        {{ $fotografer->id }}
                                      </h5>
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a type="button" href="fotografer/delete/{{ $fotografer->id }}" class="btn btn-danger">Hapus</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

<!-- Modal Add New Fotografer-->
<div class="modal-layout">
  <div class="modal fade" id="fotograferBaru" tabindex="-1" role="dialog" aria-labelledby="fotograferBaruLabel" aria-hidden="true">
    <div class="modal-dialog modal-fotografer-baru" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="col-md-12">
            <h5 class="modal-title text-center" id="fotograferBaruLabel">Daftarkan Fotografer Baru</h5>
          </div>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('cmsFotograferCreate') }}" enctype="multipart/form-data">
              @csrf

              <div class="input-group control-group" >
                <div class="col-md-4">
                  <label for="nama">Nama Fotografer</label>
                </div>
                <div class="custom-file">
                  <input id="nama" type="text" class="form-control " name="pasien_nama" required>
                </div>
              </div>

              <br>

              <div class="input-group control-group increment" >
                <div class="col-md-4">
                  <label for="fotografer_img">Foto Fotografer</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="fotografer_img" name="fotografer_img">
                  <label class="custom-file-label" for="fotografer_img">Choose file</label>
                </div>
              </div>

              <hr>

              <div class="col-md-12 text-center">
                <label for="fotografer_img">Foto Galeri</label>
              </div>

              <div class="input-group control-group increment" >
                @for ($i = 0; $i < 9; $i++)
                <div class="col-md-4" style="margin-top:8px;">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto[]">
                    <label class="custom-file-label" for="fotografer_img">Choose file</label>
                  </div>
                </div>
                @endfor
              </div>
              <br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);

      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection

<style media="screen">
  .modal-fotografer-baru {
    max-width: 800px !important;
  }
</style>
