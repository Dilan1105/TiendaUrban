@csrf

<div class="field">
    <label class="label">Nombre</label>
    <div class="control">
        <input class="input" type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required>
    </div>
    @error('name')<p class="help is-danger">{{ $message }}</p>@enderror
</div>

<div class="field">
    <label class="label">Descripción</label>
    <div class="control">
        <textarea class="textarea" name="description">{{ old('description', $product->description ?? '') }}</textarea>
    </div>
    @error('description')<p class="help is-danger">{{ $message }}</p>@enderror
</div>

<div class="field">
    <label class="label">Precio</label>
    <div class="control">
        <input class="input" type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" required>
    </div>
    @error('price')<p class="help is-danger">{{ $message }}</p>@enderror
</div>

<div class="field">
    <label class="label">Stock</label>
    <div class="control">
        <input class="input" type="number" name="stock" value="{{ old('stock', $product->stock ?? 0) }}">
    </div>
    @error('stock')<p class="help is-danger">{{ $message }}</p>@enderror
</div>

<div class="field">
    <div class="control">
        <button class="button is-link" type="submit">Guardar</button>
        <a class="button" href="{{ route('products.index') }}">Cancelar</a>
    </div>
</div>
