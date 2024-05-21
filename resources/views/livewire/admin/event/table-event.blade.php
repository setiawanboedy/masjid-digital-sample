<div>
    <div class="col-12">
        <div class="card">
            <div class="px-3 card-body py-4-5 d-flex justify-content-center">
                <div class="row">
                    <div class="col-4">
                        <div class="stats-icon purple">
                            <div>

                                <svg class="text-white" stroke="currentColor" fill="none" stroke-width="2"
                                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="2em"
                                    width="2em" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h6 class="font-semibold text-muted">Web Series</h6>
                        <h6 class="mb-0 font-bold">
                            0
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="px-3 card-body py-4-5 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-4">
                            <div class="stats-icon green">
                                <div>
                                    <i class="bi bi-globe"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <h6 class="font-semibold text-muted">Event Online</h6>
                            <h6 class="mb-0 font-bold">
                                0
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="px-3 card-body py-4-5 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-4">
                            <div class="stats-icon blue">
                                <div>
                                    <svg class="text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                        stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0"
                                        height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <h6 class="font-semibold text-muted">Event Offline</h6>
                            <h6 class="mb-0 font-bold">
                                0
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="px-3 py-3 col card">
            <div class="pb-3 d-flex justify-content-end">
                <div class="gap-2 btn-group d-gap">

                    <a href="{{route('admin.event.create')}}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Tambah Event
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-sm w-100" id="datatable">
                    <thead>
                        <tr>
                            <th scope=" col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$event->title}}</td>
							<td>{{$event->dtm}}</td>
							<td>{{$event->category}}</td>
							<td>{{$event->user->name}}</td>
							<td>
                                <img src="{{Storage::url($event->image)}}" alt="poster" width="85" height="85" class="rounded">    
                            </td>
							<td class="text-bold-500">
								<div class="gap-2 mb-3 btn-group gap" role="group">
									<button type="button"
										class="btn btn-success btn-sm update-modal" data-bs-toggle="modal"
										data-bs-target="#updateAsbabModal" wire:click="#">
										<i class="bi bi-pencil-square"></i>
									</button>
									<button type="button" class="btn btn-danger btn-sm delete" wire:click="#">
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
    </div>

</div>

