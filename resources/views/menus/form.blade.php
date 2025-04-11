<div class="mb-3">
    <label for="name" class="form-label">Menu Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $menu->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price (₹)</label>
    <input type="number" name="price" class="form-control" value="{{ old('price', $menu->price ?? '') }}"
        step="0.01" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="3">{{ old('description', $menu->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    @if (!empty($menu->image))
        <div class="mb-2">
            <img src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/logo.png') }}"
                alt="{{ $menu->title }}" class="img-fluid" style="height: 200px; object-fit: cover;">
            <div class="form-check mt-2">
                <input type="checkbox" name="remove_image" value="1" class="form-check-input"
                    id="removeImageCheck">
                <label class="form-check-label" for="removeImageCheck">Remove Image</label>
            </div>
        </div>
    @endif
    <input type="file" name="image" class="form-control">
</div>
