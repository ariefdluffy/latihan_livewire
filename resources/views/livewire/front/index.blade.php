@section('title')
Frequently Asked Questions
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-3">Frequently Asked Questions</h2>
            <div class="col-md-6">
              <form>
                {{-- @csrf --}}
                <div class="form-group mb-4">
                  <input class="form-control" wire:model.live="search" type="text" placeholder="Cari...">
                </div>
              </form>
              <p>Cari {{ $search }}</p>
            </div>
            <div class="accordion" id="accordionExample">
              <?php $number = 1; ?>
              @if ($faq && $faq->count() > 0)
                  
                @foreach ($faq as $data)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      #{{$number}} - {{ $data->nama_pertanyaan }}
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      {{ $data->jawaban }}
                    </div>
                  </div>
                </div>
                <br>
                <?php $number++; ?>
                @endforeach
                @else
                <p class="text-danger">Data yang di cari kosong....</p>
                  
              @endif
            </div>

    </div>
</div>