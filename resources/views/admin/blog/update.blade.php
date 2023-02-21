@extends('layout.admin.app')
@section('css')
    <style>
        .alert-warning {
            font-size: 14px;
        }

        .fs-12 {
            font-size: 12px;
        }
    </style>
@endsection
@section('content')
    @include('layout.admin.header')
    @include('layout.admin.sidebar')
    <main id="main" class="main" style="overflow: hidden !important">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/blogs">Blogs</a></li>
                    <li class="breadcrumb-item active">Update</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="col d-flex flex-column gap-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="card-title">Update Blogs <span>| {{ now()->year }}</span></h5>
                                    <a type="button" class="btn btn-primary" href="/admin/blogs">
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('update-blogs', ['id' => $blog->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col py-3">
                                        @if ($errors->any())
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Failed Update Blogs!</strong> You have to check this fields.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                <div class="col-md-2 col">
                                                    <label for="" class="form-label">Thumbnail Preview</label>
                                                    <div class="col d-flex align-items-center justify-content-center border rounded"
                                                        style="min-height: 110px">
                                                        <img class="img-preview img-fluid" id="img_preview"
                                                            src="{{ asset('uploaded_files/'.'blogs/'.$blog->created_at->format('Y').'/'.$blog->created_at->format('m').'/'. $blog->blog_thumbnail) }}">
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-column gap-2">
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Thumbnail
                                                        </label>
                                                        <input type="file" class="form-control" id="thumbnail"
                                                            onchange="previewImage()" name="blog_thumbnail">
                                                        @error('blog_thumbnail')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Alt <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="alt_en"
                                                            name="blog_alt" value="{{ $blog->blog_thumbnail_alt }}">
                                                        @error('blog_alt')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                <div class="col">
                                                    <label for="" class="form-label">
                                                        Language <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <div class="col">
                                                        <select class="select2" name="lang" id="lang"
                                                            onchange="selectLang()">
                                                            <option value=""></option>
                                                            <option value="en"
                                                                {{ $blog->lang == 'en' ? 'selected' : '' }}>English</option>
                                                            <option value="id"
                                                                {{ $blog->lang == 'id' ? 'selected' : '' }}>Indonesia
                                                            </option>
                                                        </select>
                                                    </div>
                                                    @error('lang')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">
                                                        Category <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <div class="col">
                                                        <select class="select2" name="category" id="category">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    @error('category')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <div class="col d-flex flex-row justify-content-between">
                                                        <label for="" class="form-label">
                                                            Mentor
                                                        </label>
                                                        <small
                                                            class="alert text-danger p-0 m-0 fs-12 text-decoration-underline"
                                                            onclick="clearMentor()" style="cursor: pointer">Clear
                                                            Selection</small>
                                                    </div>
                                                    <div class="col">
                                                        <select class="select2" name="mentor" id="mentor">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    @error('mentor')
                                                        <small
                                                            class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Title <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="blog_title"
                                                    name="blog_title" value="{{ $blog->blog_title }}"
                                                    onchange="createSlug()">
                                                @error('blog_title')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Slug <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="blog_slug"
                                                    name="blog_slug" value="{{ $blog->slug }}">
                                                @error('blog_slug')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Description <span style="color: var(--red)">*</span>
                                                </label>
                                                <small class="alert d-block p-0 m-0 mb-2 fs-12">Note: Please Use
                                                    <strong>'Heading 2'</strong> for a <strong>Section</strong></small>
                                                <textarea class="textarea" name="blog_description" id="blog_description">
                                                {{ $blog->blog_description }}
                                            </textarea>
                                                @error('blog_description')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    SEO Title <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="seo_title"
                                                    name="seo_title" value="{{ $blog->seo_title }}">
                                                @error('seo_title')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    SEO Keyword <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="seo_keyword"
                                                    name="seo_keyword" value="{{ $blog->seo_keyword }}"
                                                    placeholder="Add keywords separated by commas (,)">
                                                @error('seo_keyword')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    SEO Description <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="seo_desc"
                                                    name="seo_desc" value="{{ $blog->seo_desc }}">
                                                @error('seo_desc')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col d-flex flex-md-row flex-column gap-md-4 gap-2">
                                                <div class="col">
                                                    <label for="" class="form-label">
                                                        Duration Read <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="duration_read"
                                                            name="duration_read" value="{{ $blog->duration_read }}">
                                                        <span class="input-group-text" style="font-size: 80%">
                                                            Minute
                                                        </span>
                                                    </div>
                                                    @error('duration_read')
                                                        <small
                                                            class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">
                                                        Blog Status <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <div class="col d-flex flex-row py-1 gap-md-4 gap-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="blog_status" id="blog_status_draft" value="draft"
                                                                {{ $blog->blog_status == 'draft' ? 'checked' : '' }}>
                                                            <label class="form-label card-title p-0 m-0"
                                                                for="blog_status_draft">
                                                                Draft
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="blog_status" id="blog_status_publish"
                                                                value="publish"
                                                                {{ $blog->blog_status == 'publish' ? 'checked' : '' }}>
                                                            <label class="form-label card-title p-0 m-0"
                                                                for="blog_status_publish">
                                                                Publish
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @error('blog_status')
                                                        <small
                                                            class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary" id="submit">
                                                <i class="fa-solid fa-pen-to-square me-1"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        function previewImage() {
            const image = document.querySelector('#thumbnail')
            const imgPreview = document.querySelector('#img_preview')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function createSlug() {
            const blog_title = document.getElementById('blog_title').value.toLowerCase().split(' ').join('-');
            const blog_slug = document.getElementById('blog_slug');
            blog_slug.value = blog_title;
        };

        function clearMentor() {
            $('#mentor').val(null).trigger('change');
        }

        async function selectLang() {
            let lang = $('#lang').val()
            let url_category = "{{ url('api/category') }}/" + lang
            let url_mentor = "{{ url('api/mentor') }}/" + lang

            // Select Blog Category 
            try {
                const response = await axios.get(url_category);
                let data = response.data
                $('#category').html('<option value=""></option>')
                data.forEach(element => {
                    $('#category').append(
                        '<option value="' + element.id + '">' +
                        element.category_name +
                        '</option>'
                    )
                    // console.log(element);
                });
                $('#category').val('{{ $blog->cat_id }}').trigger('change')
            } catch (error) {
                console.error(error);
            }

            // Select Mentor 
            try {
                const response = await axios.get(url_mentor);
                let data = response.data
                $('#mentor').html('<option value=""></option>')
                data.forEach(element => {
                    $('#mentor').append(
                        '<option value="' + element.id + '">' +
                        element.mentor_firstname + ' ' + element.mentor_lastname +
                        '</option>'
                    )
                    // console.log(element);
                });
                $('#mentor').val('{{ $blog->mt_id }}').trigger('change')
            } catch (error) {
                console.error(error);
            }
        }

        selectLang()
    </script>
@endsection
