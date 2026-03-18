<x-layouts.app>
  @foreach($products as $product)
    <x-product :product="$product"></x-product>
  @endforeach
</x-layouts.app>
