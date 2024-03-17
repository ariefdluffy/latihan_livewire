@section('title')
Create Faq
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
        <a href="/" wire:navigate class="btn btn-md btn-secondary rounded shadow-sm border-0 mb-3">Back</a>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="store" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group mb-4">

                            <label class="fw-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image">

                            <!-- error message untuk title -->
                            @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}

                        <div class="form-group mb-4">
                            <label class="fw-bold">NAMA PERTANYAAN</label>
                            <input type="text" class="form-control @error('nama_pertanyaan') is-invalid @enderror" wire:model="nama_pertanyaan" placeholder="Masukkan Nama Pertanyaan">

                            <!-- error message untuk title -->
                            @error('nama_pertanyaan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">JAWABAN</label>
                            <textarea class="form-control @error('jawaban') is-invalid @enderror" wire:model="jawaban" rows="5" placeholder="Masukkan Jawaban"></textarea>

                            <!-- error message untuk content -->
                            @error('jawaban')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>