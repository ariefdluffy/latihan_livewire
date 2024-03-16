@section('title')
Data Faq
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <a href="/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">TAMBAH DATA</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                
                                <th scope="col">Nama Pertanyaan</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($faq as $data)
                            <tr>
                               
                                <td>{{ $data->nama_pertanyaan }}</td>
                                <td>{!! $data->jawaban !!}</td>
                                <td class="text-center">
                                    <a href="/edit/{{ $data->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    <button class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data masih kosong.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $faq->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>