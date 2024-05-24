<div>
    <div class="card">
        <form wire:submit.prevent='store' class="p-md-5">
            @csrf
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text"
                        class="form-control @error('title')
                    is-invalid
                    @enderror"
                        name="title" id="title" wire:model.lazy='title' value="{{ old('title') }}"
                        placeholder="Masukkan judul event" required>
                    @error('title')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Event</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                            id="date" wire:model='date' value="{{ old('date') }}"
                            placeholder="Masukkan tanggal event" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="mb-3">
                        <label for="time" class="form-label">Jam Event</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror" name="time"
                            id="time" wire:model='time' value="{{ old('time') }}"
                            placeholder="Masukkan tanggal event" required>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori Event</label>
                    <select class="form-select @error('category') is-invalid @enderror" name="category" id="category"
                        wire:model.change='category' required>
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

            @if ($category === \App\Helper\ConstData::SERIES)
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label for="title" class="form-label">Link video</label>
                            <div class="d-flex justify-content-end align-items-end">
                                <a wire:click='addUrl' class="btn btn-success ">+</a>
                            </div>
                        </div>
                        @foreach ($videos as $index => $video)
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>{{ $index + 1 }}.</div>
                                <div class="col px-2">
                                    <input type="text"
                                        class="form-control @error('videos' . $index . 'title') is-invalid @enderror"
                                        wire:model.lazy.defer='videos.{{ $index }}.title'
                                        placeholder="Judul video" required>
                                    @error('videos' . $index . 'title')
                                        <div class="d-block invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col px-2">
                                    <input type="text"
                                        class="form-control @error('videos' . $index . 'video_url') is-invalid @enderror"
                                        wire:model.lazy.defer='videos.{{ $index }}.video_url'
                                        placeholder="Link video" required>
                                    @error('videos' . $index . 'video_url')
                                        <div class="d-block invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="px-2">
                                    <input type="checkbox"
                                        class="form-check-input @error('videos.' . $index . '.is_unlock') is-invalid @enderror"
                                        wire:model.defer="videos.{{ $index }}.is_unlock"
                                        id="is_unlock{{ $index }}">
                                    <label class="form-check-label" for="is_unlock{{ $index }}">Preview</label>
                                    @error('videos.' . $index . '.is_unlock')
                                        <div class="d-block invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="align-items-center">
                                    <button class="btn btn-outline-danger"
                                        wire:click.prevent="removeUrl({{ $index }})">-</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

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

            <div wire:ignore class="">
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
