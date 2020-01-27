@extends('master')

@section('Title')
    <title>
      GadaMaxima - Kirim Pesan
    </title>
@endsection
@section('layout')
<div class="content">
    <div class="row">
<div class="col-md-8 offset-md-2">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title" style="text-align:center">Tulis Pesan</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-12 pr-1">
            <div class="form-group">
              <H6 label>Penerima</label>
                <select class="form-control" id="Penerima">
                    <option>PT.SatpamIndo</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col pr-1">
              <div class="form-group">
                <H6 label>Subject / CC</label>
                <input type="text" class="form-control" placeholder="Subject Pesan">
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:1rem">
            <div class="col-md-12">
              <div class="form-group">
                <H6 label for="Pesan">Pesan</label>
                <textarea class="form-control" id="Pesan" rows="10" placeholder="Tulis Pesan"></textarea>
              </div>
            </div>
          </div>  
          <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round" style="width:15rem; font-size:15px">Kirim Pesan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection