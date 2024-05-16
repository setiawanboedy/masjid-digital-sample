<div>
    <div class="px-3 py-3 col card">
		<div class="pb-3 d-flex justify-content-end">
			<div class="gap-2 btn-group d-gap">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDonateModal">
					<i class="bi bi-plus-circle"></i> Tambah Data
				</button>
			</div>
		</div>


        <div class="card-body" style="overflow-x: auto;">
            <div id="fixedHeader_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="fixedHeader_filter" class="dataTables_filter"><label>Pencarian:<input
                                    wire:model.live.debounce.300ms='search' type="search"
                                    class="form-control form-control-sm" placeholder="" aria-controls="fixedHeader"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table dataTable no-footer" role="grid" aria-describedby="fixedHeader_info">
                            <thead>
                                <tr>
                                    <th scope=" col">#</th>
                                    <th scope="col">Nama Donatur</th>
                                    <th scope="col">Nominal Donasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Akad/Program</th>
                                    <th scope="col">CS</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $donation->donatur->name }}</td>
                                        <td>{{ $donation->nominal_convert }}</td>
                                        <td>{{ $donation->date }}</td>
                                        <td>{{ $donation->gender_convert }}</td>
                                        <td>{{ $donation->program->name }}</td>
                                        <td>{{ $donation->asbab->name }}</td>
                                        <td class="text-bold-500">
                                            <div class="gap-2 mb-3 btn-group gap" role="group">
                                                <button type="button"
                                                    class="btn btn-success btn-sm update-modal" data-bs-toggle="modal"
                                                    data-bs-target="#updateDonateModal" wire:click="editDonate({{$donation->id}})">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm delete" wire:click="deleteDonate({{$donation->id}})">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="px-3 row d-flex justify-content-between">
                    <div class="col-sm-12 col-md-5">
    
                    </div>
                    {{ $donations->links() }}
    
                </div>
            </div>
        </div>
	</div>
</div>
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
@endpush
@push('scripts')
@include('includes.scripts.alert')
@endpush