{{-- show a list of products with their name and price --}}
<x-layouts.app>
  @foreach($products as $product)
    <x-product :product="$product" />
  @endforeach
</x-layouts.app>
