<form action="/pangan/{{ $pangan->kode_pangan }}" method="POST" id="route_edit_pangan">
    @csrf    
    @method('PUT')
    <div class="form-row" id="form-edit-pangan">
        <div class="col-lg-6">
            <label for="jenis_pakan">Jenis Pakan</label>
            <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" value="{{ $pangan->jenis_pakan }}">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
        </div>        
    </div>
</form>

<form action="/pangan2" method="POST">
    @csrf
    <div class="form-row mt-4">
        <div class="col-md-6">
            <label for="tgl" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="col-md-6">
            <label for="stock" class="form-label">Pemasukan Stock</label>
            <input type="number" class="form-control" name="jumlah_pangan" min="1">
        </div>
        <input type="hidden" name="tipe_pangan" value="{{ $pangan->kode_pangan }}">
        <div class="mt-3">
            <button type="submit" class="btn btn-primary btn-sm ml-1">Submit</button>
        </div>
    </div>
</form>

<form action="/pangan3" method="POST">
    @csrf
    <div class="form-row mt-4">
        <div class="col-md-6">
            <label for="tgl" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="col-md-6">
            <label for="stock" class="form-label">Pengeluaran Stock</label>
            <input type="number" class="form-control" name="jumlah_pangan" min="1">
        </div>
        <input type="hidden" name="tipe_pangan" value="{{ $pangan->kode_pangan }}">
        <div class="mt-3">
            <button type="submit" class="btn btn-primary btn-sm ml-1">Submit</button>
        </div>
    </div>
</form>
    