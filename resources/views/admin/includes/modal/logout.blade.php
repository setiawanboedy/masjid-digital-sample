<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Apakah Anda yakin ?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
            <div>
                <div class="items-center modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <form method="POST" action="{{ route('logout') }}" id="logout"  x-data>
                        @csrf
                        <a href="{{ route('logout') }}" class='btn btn-danger' @click.prevent="$root.submit();">
                            <span>Logout</span>
                        </a>
                    </form>
                </div>
            </div>
		</div>
	</div>
</div>
