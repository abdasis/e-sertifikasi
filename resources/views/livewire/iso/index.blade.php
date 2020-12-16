<div>
    <!-- start page title -->
    <div class="row">
      <div class="col-12">
          <div class="page-title-box">
              <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                      <li class="breadcrumb-item"><a href="javascript: void(0);">Sertifikasi</a></li>
                      <li class="breadcrumb-item active">Semua</li>
                  </ol>
              </div>
              <h4 class="page-title">Semua Sertifikasi</h4>
          </div>
      </div>
  </div>
  <!-- end page title -->

  <div class="row">
      <div class="col-12">
          <div class="card">
              <h5 class="card-header bg-white border-bottom">
                  Tampilan Seluruh Sertifikasi
              </h5>

              <div class="card-body">
                  <table class="table table-sm">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Jenis ISO</th>
                              <th>Dibuat Pada</th>
                              <th>Option</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($Isos as $key => $iso)
                          <tr>
                              <td scope="row">{{ $key+1 }}</td>
                              <td>{{ $iso->jenis_iso }}</td>
                              <td>{{ $iso->created_at }}</td>

                              <td>
                                  <div class="btn-group-justified ">
                                    <a href="{{ route('iso.update', $iso->slug) }}">
                                        <button class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i></button>
                                    </a>
                                      <button class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></button>
                                      <button class="btn btn-sm btn-danger shadow-none"><i class="fa fa-trash"></i></button>
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
