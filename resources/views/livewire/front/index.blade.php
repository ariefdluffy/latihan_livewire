@section('title')
Data Faq
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-3">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
                @foreach ($faq as $data)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{ $data->nama_pertanyaan }}
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        {{ $data->jawaban }}
                      </div>
                    </div>
                </div>
                <br>
                @endforeach
                
                
            </div>

    </div>
</div>