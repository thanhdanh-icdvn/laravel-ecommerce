<div class="col-span-3 xl:col-span-1">
    <livewire:admin.product-organization-form :product="$product"/>
    <livewire:admin.product-option-manager :product="$product" />
    <livewire:admin.product-variant-manager :product="$product" :skus="$product->skus" />
</div>
