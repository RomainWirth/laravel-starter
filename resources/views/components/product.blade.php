<div>
  <a href="{{ route('products.show', ['key' => $product['key']]) }}">
    {{ $product['name'] }}
  </a>
  <span> - </span>
  {{ $product['price'] }} €
</div>
