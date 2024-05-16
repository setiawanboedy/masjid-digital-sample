{{-- ========================= --}}
@if (Auth::user()->roles == 'ADMIN')
<div class="modal fade" id="tourModal" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="w-100 modal-title text-center">Lengkapi dulu ya!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table mb-4">
                    <tbody>
                        <tr>
                            <td class="h6">Atur target CS bulan ini</td>
                            <td>
                                <a href="{{route('masters.asbab.index')}}" id="targetCsButton" class="btn btn-primary ms-1">Lengkapi ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="h6">Tambah minimal satu program</td>
                            <td>
                                <a href="{{route('masters.program.index')}}" id="programButton" class="btn btn-primary ms-1">Lengkapi ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="h6">Atur target tahun ini</td>
                            <td>
                                <a href="{{route('masters.target.index')}}" id="targetYearButton" class="btn btn-primary ms-1">Lengkapi ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endif

{{-- ======================== --}}