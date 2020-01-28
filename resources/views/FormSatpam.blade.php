@extends('master')
@section('Title')
    <title>
        GadaMaxima - Mendaftar Satpam
    </title>
@endsection
@section('layout')
<div class="content">
    <div class="row">
<div class="col-md-10 offset-md-1">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title" style="text-align:center">Daftar Satpam Baru</h5>
      </div>
      <div class="card-body" style="padding-top:50px">
        <form>          
          <div class="row">
          <div class="col-md-6">
          <h6 class=""card-subtitle mb-2" style="text-align:center">Data Diri</h6>
          <div class="row">
            <div class="col-md-12 ">
              <div class="form-group">
                <h6 label>Nama</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <h6 label>NIK</label>
                <input type="text" class="form-control" placeholder="Nomor Induk Keluarga">
              </div>
            </div>
           
            <div class="col-md-6">
              <div class="form-group">
                <h6 label>Tempat Lahir</label>
                <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" maxlength="25">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h6 label>Tanggal Lahir</label>
                <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" maxlength="25">
              </div>
            </div>
        
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat Lengkap" maxlength="25">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label for="Jk">Jenis Kelamin</label>
                  <select class="form-control" name="Jenis_kelamin" id="JK">
                  <option selected value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki Laki</option>
                  <option value="P">Perempuan</option>
                  </select>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="form-group">
                  <h6 label for="Golongan_darah">Golongan Darah</label>
                  <select class="form-control" name="Gol_darah" id="Golongan_darah">
                  <option selected value="">Pilih Golongan Darah</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Agama</label>
                  <select class="form-control" name="Agama" id="Agama">
                  <option selected value="">Pilih Agama</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Konghucu">Konghucu</option>
                  <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <h6 label>Tinggi Badan</label>
                    <input type="number" class="form-control" placeholder="Tinggi Badan" maxlength="25">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <h6 label>Berat Badan</label>
                    <input type="number" class="form-control" placeholder="Berat Badan" maxlength="25">
                  </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Kewarganegaraan</label>
                  <input type="text" class="form-control" placeholder="Kewarganegaraan" maxlength="25">
                </div>
                </div>
                </div>
          </div>

          <!-- Data Keluarga -->
          <div class="col-md-6">
          <h6 class=""card-subtitle mb-2" style="text-align:center">Data Keluarga</h6>
          <div class="row">
            <div class="col-md-12 ">
              <div class="form-group">
                <h6 label>Nama Ayah</label>
                <input type="text" class="form-control" placeholder="Nama Ayah">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Nama Ibu Kandung</label>
                <input type="text" class="form-control" placeholder="Nomor Induk Keluarga">
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label for="Jk">Status Perkawinan</label>
                  <select class="form-control" name="Status_Perkawinan" id="SPK">
                  <option selected value="">Pilih Status Perkawinan</option>
                  <option value="M">Menikah</option>
                  <option value="B">Belum Menikah</option>
                  <option value="C">Bercerai</option>
                  </select>
                </div>
            </div>        
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Nama Istri</label>
                  <input type="text" class="form-control" placeholder="Nama Istri">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label>NIK Istri</label>
                  <input type="text" class="form-control" placeholder="NIK Istri">
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label for="JumlahTanggunan">Jumlah Tanggungan</label>
                  <input type="number" class="form-control" placeholder="NIK Istri">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h6 label>NPWP</label>
                  <input type="number" class="form-control" placeholder="NPWP">
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <h6 label for="JumlahTanggunan">BPJS Kesehatan</label>
                  <input type="number" class="form-control" placeholder="BPSJ Kesehatan">
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <h6 label for="JumlahTanggunan">BPJS Tenaga Kerja</label>
                  <input type="number" class="form-control" placeholder="BPSJ Tenaga Kerja">
                </div>
                </div>
                </div>
          </div>
          </div>
          <Hr height="10px"></Hr>
          
          <!-- Data Pendidikan dan Diklat -->
          <div class="col-md-6">
          <div class="row" style="padding-top:20px">
          <h6 class=""card-subtitle mb-2" style="text-align:center">Data Pendidikan & Diklat</h6>
            <div class="col-md-12">
              <div class="form-group">
              <h6 label>Pendidikan Terakhir</label>
              <select class="form-control" name="Pendidikan_Terakhir" id="Pendidikan_terakhir">
                  <option selected value="">Pilih Pendidikan Terakhir</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP Sederajat</option>
                  <option value="SMA">SMA/SMK Sederajat</option>
                  <option value="Sarjana">Sarjana</option>
              </select>
          </div>
          </div>
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label for="Sekolah">Sekolah/Perguruan Tinggi</label>
                  <input type="text" class="form-control" placeholder="Sekolah atau Perguruan Tinggi Terakhir">
                </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>No Ijazah</label>
                <input type="text" class="form-control" placeholder="No Ijazah" >
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <h6 label>Tahun Lulus</label>
                <input type="number" class="form-control" placeholder="Tahun">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <h6 label>Tahun Lulus</label>
              <input type="file" class="form-control" placeholder="Tahun">
            </div>
        </div>
          </div>
          <!-- endROW -->
          </div>
          <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Daftar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection