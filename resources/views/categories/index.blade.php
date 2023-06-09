<x-main>
    <div class="container-mt-5">
        <div class="row">
            <div class="col-6">
                <h1>Categorie</h1>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Crea categoria</a>
            </div>
        </div>

        <x-success />

            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Articolo collegati</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @foreach ($category->articles as $article)
                                    {{ $article->title }}<br>
                                @endforeach
                            </td>
                            <td class="text-end">
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Modifica</a>
                                <form onsubmit="return confirm('Sei sicuro di voler cancellare?')" action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger ms-2" type="submit">Cancella</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
    </div>
</x-main>