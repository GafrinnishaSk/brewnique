<style>
.menu-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #3e2723;
}

.card-text {
    font-size: 0.95rem;
}
</style>
<!-- Menu Section -->
<section id="menu-section" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 menu-title">Our Caffe Menu</h2>
        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 text-center" style="background-color: #fff9c4; border-radius: 15px;">
                        <img src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/logo.png') }}"
                             alt="{{ $menu->name }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menu->name }}</h5>
                            <p class="card-text text-success fw-bold">₹{{ $menu->price }}</p>
                            <p class="card-text">{{ $menu->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
