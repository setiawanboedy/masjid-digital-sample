<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('refresh', (event) => {
            
            $('#addAsbabModal').modal('hide');
            $('#addProgramModal').modal('hide');
            $('#addDonateModal').modal('hide');
            $('#addAccountModal').modal('hide');
            $('#addTargetModal').modal('hide');
            $('#addReminderModal').modal('hide');
            $('#createManageModal').modal('hide');
            
            $('#updateAsbabModal').modal('hide');
            $('#updateDonateModal').modal('hide');
            $('#updateProgramModal').modal('hide');
            $('#updateTargetModal').modal('hide');
            $('#updateDonaturModal').modal('hide');
            $('#updateReminderModal').modal('hide');
            $('#changeCSPasswordModal').modal('hide');
            Swal.fire({
                title: event.data['title'],
                text: event.data['text'],
                icon: event.data['icon'],
                confirmButtonText: 'Ok'
            })
        });
    });
</script>
<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('delete', (event) => {
            
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Kamu tidak akan bisa mengembalikannya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#179978',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('confirm-delete', [event.id]);

                }
            })
        });
    });
</script>

