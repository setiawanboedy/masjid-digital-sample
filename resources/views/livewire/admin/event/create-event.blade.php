<div>
    <div class="card">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-error" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form wire:submit.prevent='store' class="p-md-5">
            @csrf
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" wire:model='title'
                        value="{{ old('title') }}" placeholder="Masukkan judul event" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Event</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                            id="date" wire:model='date' value="{{ old('date') }}"
                            placeholder="Masukkan tanggal event" required>
    
                        @error('date')
                            <div class="d-block invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="mb-3">
                        <label for="time" class="form-label">Jam Event</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror" name="time"
                            id="time" wire:model='time' value="{{ old('time') }}"
                            placeholder="Masukkan tanggal event" required>
    
                        @error('time')
                            <div class="d-block invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori Event</label>
                    <select class="form-select @error('category') is-invalid @enderror" name="category" id="category"
                        wire:model='category'>
                        <option selected>Pilih Kategori</option>
                        <option value="SERIES" {{ old('category') === 'SERIES' ? 'selected' : '' }}>Web Series</option>
                        <option value="ONLINE" {{ old('category') === 'ONLINE' ? 'selected' : '' }}>Event Online
                        </option>
                        <option value="OFFLINE" {{ old('category') === 'OFFLINE' ? 'selected' : '' }}>Event Offline
                        </option>
                    </select>

                    @error('category')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="image" class="form-label">Poster Event</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                        id="image" wire:model='image' value="{{ old('image') }}"
                        placeholder="Masukkan tanggal event" required>

                    @error('image')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div wire:ignore>
                <textarea id="description" wire:model.defer='description' required></textarea>
            </div>

            <div class="d-flex justify-content-end mt-5 ">
                <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
    <script>
        const image_upload_handler_callback = (blobInfo, progress) => new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', "{{ route('editor.image.upload') }}");

            // Tambahkan CSRF token jika diperlukan
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            xhr.setRequestHeader('X-CSRF-Token', csrfToken);

            xhr.upload.onprogress = (e) => {
                progress(e.loaded / e.total * 100);
            };

            xhr.onload = () => {

                if (xhr.status === 403) {
                    reject({
                        message: 'HTTP Error: ' + xhr.status,
                        remove: true
                    });
                    return;
                }

                if (xhr.status < 200 || xhr.status >= 300) {
                    reject('HTTP Error: ' + xhr.status);
                    return;
                }

                const json = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
                if (!json || typeof json.location != 'string') {
                    reject('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                resolve(json.location);
            };

            xhr.onerror = () => {
                reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };

            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        });
        tinymce.init({
            selector: 'textarea#description',
            menubar: false,
            plugins: 'code table lists image',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image',
            setup: function(editor) {
                editor.on('change', function() {
                    @this.set('description', editor.getContent());
                });
            },
            images_upload_handler: image_upload_handler_callback,
        });
    </script>
    @include('admin.includes.scripts.alert')
@endpush
