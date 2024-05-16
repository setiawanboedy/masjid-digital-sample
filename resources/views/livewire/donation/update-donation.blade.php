<div>
    <form wire:submit.prevent='update'>
        @csrf
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3" wire:ignore>
                    <label for="donatur_id" class="form-label">Cari Donatur</label>
                    <select id="searchable-dropdown2" name="donatur_id" wire:model='donatur_id'>
                        {{-- <option selected>Pilih Donatur</option>
                        @foreach ($donaturs as $donatur)
                            <option value="{{ $donatur->id }}">{{ $donatur->name }} <p style="color: grey">-> {{$donatur->donatur_code}}</p></option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" @disabled($donatur_id != null) name="name" id="name"
                    wire:model.live.debounce.300ms='name'
                        value="{{ old('name') }}" placeholder="Masukkan nama lengkap..">

                    @error('name')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="donatur_code" class="form-label">Kode Donatur</label>
                    <input type="number" class="form-control @error('donatur_code') is-invalid @enderror" @disabled($donatur_id != null) name="donatur_code" id="donatur_code"
                    wire:model.live.debounce.300ms='donatur_code'
                        value="{{ old('donatur_code') }}" placeholder="Masukkan kode donatur">

                    @error('donatur_code')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Hp</label>
                    <input type="number" class="form-control @error('nomor') is-invalid @enderror" @disabled($donatur_id != null) name="nomor" id="nomor"
                    wire:model.live.debounce.300ms='nomor'
                        value="{{ old('nomor') }}" placeholder="Masukkan nomor hp">

                    @error('nomor')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <div x-data="{ nominal: @entangle('nominal') }">
                        <input type="text" class="form-control @error('nominal') is-invalid @enderror"
                            id="nominal" x-model="nominal"
                            x-on:input="nominal = new Intl.NumberFormat('id-ID').format(nominal.replace(/\D/g, ''))"
                            placeholder="Nominal">
                        @error('nominal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-12 col-lg-6">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-select @error('gender') is-invalid @enderror" @disabled($donatur_id != null) name="gender" id="gender" wire:model.change='gender'>
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="1" {{ old('gender')==='1' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="2" {{ old('gender')==='2' ? 'selected' : '' }}>Perempuan</option>
                </select>

                @error('gender')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date"
                    wire:model.live.debounce.300ms='date'
                        value="{{ old('date') }}" placeholder="Tanggal">

                    @error('date')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-4">
                <label for="program_id" class="form-label">Program</label>
                <select class="form-select @error('program_id') is-invalid @enderror" name="program_id" id="program_id" wire:model.change='program_id'>
                    <option selected>Pilih Program</option>
                    @foreach ($programs as $program)
                    <option value="{{$program->id}}">{{$program->name}}</option>
                    @endforeach
                </select>

                @error('gender')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <label for="asbab_id" class="form-label">CS</label>
                <select class="form-select @error('asbab_id') is-invalid @enderror" @disabled($isCS)  name="asbab_id" id="asbab_id" wire:model.change='asbab_id'>
                    <option selected>Pilih CS</option>
                    @foreach ($asbabs as $asbab)
                    <option value="{{$asbab->id}}" >{{$asbab->name}}</option>
                    @endforeach
                </select>

                @error('asbab_id')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Keterangan</label>
                    <textarea rows="3" class="form-control "
                    name="description" id="description" wire:model.live.debounce.300ms='description'
                   placeholder="Uraian"></textarea>
                </div>
            </div>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchable-dropdown2').select2({
            ajax: {
                url: "{{route('donatur.all.index')}}",
                dataType: 'json',
                delay: 250,
                data: function (params){
                    return {
                        q: params.term,
                        page: params.page || 1,
                    }
                },
                processResults: function (data, params){
                    params.page = params.paga || 1;
                    return {
                        results: data.data.results,
                        pagination: {
                            more: (params.page * 10)<data.data.count
                        }
                    };
                
                },
                cache: true,
            },
            
            placeholder: "Cari donatur",
            minimumInputLenght: 1,
            templateResult: formatRepo,
            templateSelection: formatRepoSelection,
            allowClear: true,
            theme: "bootstrap",
        }).on('change', function () {
            @this.dispatch('donatur',[$(this).val()]);
        });
    });
    function formatRepo (repo){
        if (repo.loading) {
            return repo.text;
        }
        return $("<div>").text(repo.name +" \u2192 "+ repo.donatur_code).html();
    }
    function formatRepoSelection (repo){
        if (!repo.name && !repo.donatur_code) {
            return repo.text;
        }
        return repo.name + " \u2192 " + repo.donatur_code;
    }
</script>
@include('includes.scripts.alert')
@endpush