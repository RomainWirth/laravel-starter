{{-- show a product with its name --}}

<x-layouts.app>
  <div>
    <h2>Fiche produit : {{ $product->name }}</h2>
    <p>Prix: €{{ $product->price }}</p>
  </div>
  <div>
    <h3>Autres produits</h3>
    @foreach($other_products as $other_product)
      <x-product :product="$other_product" />
    @endforeach
  </div>
</x-layouts.app>
