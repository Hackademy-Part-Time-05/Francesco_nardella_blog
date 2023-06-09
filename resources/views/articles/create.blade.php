<x-main>
    <div class="container mt-5">
       <div class="row">
        <div class="col-6 mx-auto">
            {{-- @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </div>
            @endif --}}
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" 
                                class="form-control @error('title') is-invalid @enderror">
                        @error ('title') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="category_id">Categoria</label>
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                  {{ $category->name }}
                                </label>
                              </div>
                            @endforeach
                        {{-- <input type="text" name="category" id="category"  value="{{ old('category') }}" 
                                class="form-control @error('category') is-invalid @enderror">
                        @error ('category') <span class="small text-danger">{{ $message }}</span> @enderror --}}
                    </div>
                    <div class="col-12">
                        <label for="body">Corpo</label>
                        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="10">{{ old('body') }}</textarea>
                        @error ('body') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="image">Immagine</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Salva</button>
                    </div>
                </div>
            </form>
        </div>
       </div>
    </div>
</x-main>