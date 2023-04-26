<x-main>
    <div class="container">
        <span class="text-info fw-bold">{{ $article->category->name }}</span>
        <h1>{{ $article->title }}</h1>
        <div class="mt-5">
            <div class="row">
                <div class="col-3">
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                </div>
                <div class="col-9">
                    {{ $article->body }}
                </div>
            </div>
        </div>
    </div>
</x-main>