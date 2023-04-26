<x-main>
    <div class="container mt-5">
        <div class="row">
                <div class="col-6 mx-auto">
                    <h1 class="mb-3">Modifica una nuova categoria</h1>

                    <x-success />

                        <form action="{{ route('categories.update', $category) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <label for="category">Nome categoria</label>
                                    <input type="text" name="name" id="name" class="form-control" 
                                            value="{{ old('name', $category->name) }}">
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Salva</button>
                                </div>
                            </div>
                        </form>
                </div>
        </div>
    </div>
</x-main>