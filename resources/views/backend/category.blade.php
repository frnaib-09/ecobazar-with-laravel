@extends('layouts.dashboundary')
@section('title')
Categories
@endsection

@section('content')
@php
    $categories = [
        ['name' => 'Fresh Vegetables', 'slug' => 'fresh-vegetables', 'products' => 48, 'status' => 'Active', 'featured' => true, 'updated' => '2 hours ago', 'color' => '#1f9254'],
        ['name' => 'Fresh Fruit', 'slug' => 'fresh-fruit', 'products' => 36, 'status' => 'Active', 'featured' => true, 'updated' => '5 hours ago', 'color' => '#f59e0b'],
        ['name' => 'Meat & Fish', 'slug' => 'meat-fish', 'products' => 24, 'status' => 'Active', 'featured' => false, 'updated' => 'Yesterday', 'color' => '#e85d5d'],
        ['name' => 'Beverages', 'slug' => 'beverages', 'products' => 19, 'status' => 'Active', 'featured' => false, 'updated' => 'Yesterday', 'color' => '#3b82f6'],
        ['name' => 'Snacks & Biscuits', 'slug' => 'snacks-biscuits', 'products' => 31, 'status' => 'Inactive', 'featured' => false, 'updated' => 'Aug 12, 2026', 'color' => '#8b5cf6'],
        ['name' => 'Bakery', 'slug' => 'bakery', 'products' => 12, 'status' => 'Active', 'featured' => true, 'updated' => 'Aug 11, 2026', 'color' => '#ec4899'],
    ];
@endphp

<div class="manager-page">
    <div class="manager-heading d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div><span class="eyebrow">CATALOG MANAGEMENT</span><h1>Categories</h1><p>Organize your shop and keep discovery effortless.</p></div>
        <button class="btn btn-success manager-add" data-bs-toggle="modal" data-bs-target="#addCategoryModal"><i data-feather="plus"></i> Add category</button>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3"><button class="metric-card active-filter w-100 text-start" data-filter="all"><span class="metric-icon green"><i data-feather="grid"></i></span><span><small>Total categories</small><strong>{{ count($categories) }}</strong><em>All collections</em></span></button></div>
        <div class="col-sm-6 col-xl-3"><button class="metric-card w-100 text-start" data-filter="featured"><span class="metric-icon amber"><i data-feather="star"></i></span><span><small>Featured</small><strong>{{ collect($categories)->where('featured', true)->count() }}</strong><em>Shown on home</em></span></button></div>
        <div class="col-sm-6 col-xl-3"><button class="metric-card w-100 text-start" data-filter="active"><span class="metric-icon blue"><i data-feather="check-circle"></i></span><span><small>Active</small><strong>{{ collect($categories)->where('status', 'Active')->count() }}</strong><em>Available now</em></span></button></div>
        <div class="col-sm-6 col-xl-3"><button class="metric-card w-100 text-start" data-filter="products"><span class="metric-icon purple"><i data-feather="package"></i></span><span><small>Products mapped</small><strong>{{ collect($categories)->sum('products') }}</strong><em>Across catalog</em></span></button></div>
    </div>
    <div class="card manager-table-card">
        <div class="card-body p-0">
            <div class="table-toolbar"><div class="search-box"><i data-feather="search"></i><input id="categorySearch" type="search" placeholder="Search category or slug..."></div><div class="toolbar-actions"><select id="categoryStatus" class="form-select"><option value="all">All status</option><option value="active">Active</option><option value="inactive">Inactive</option></select><button id="categoryFeatured" class="btn btn-outline-warning"><i data-feather="star"></i> Featured</button></div></div>
            <div class="table-responsive"><table class="table manager-table mb-0"><thead><tr><th>Category</th><th>Products</th><th>Status</th><th>Featured</th><th>Last updated</th><th class="text-end">Action</th></tr></thead><tbody id="categoryRows">
                @foreach($categories as $category)<tr data-name="{{ strtolower($category['name'].' '.$category['slug']) }}" data-status="{{ strtolower($category['status']) }}" data-featured="{{ $category['featured'] ? 'yes' : 'no' }}"><td><div class="entity"><span class="entity-avatar" style="background:{{ $category['color'] }}">{{ strtoupper(substr($category['name'], 0, 1)) }}</span><span><strong>{{ $category['name'] }}</strong><small>/{{ $category['slug'] }}</small></span></div></td><td><span class="count-pill">{{ $category['products'] }} products</span></td><td><span class="status-dot {{ strtolower($category['status']) }}">{{ $category['status'] }}</span></td><td><button class="star-toggle {{ $category['featured'] ? 'is-featured' : '' }}" title="Toggle featured"><i data-feather="star"></i></button></td><td class="muted-cell">{{ $category['updated'] }}</td><td class="text-end"><button class="btn btn-light btn-sm table-action"><i data-feather="more-horizontal"></i></button></td></tr>@endforeach
            </tbody></table></div><div id="categoryEmpty" class="empty-state d-none"><i data-feather="search"></i><p>No categories match your filters.</p></div>
        </div>
    </div>
</div>

<div class="modal fade" id="addCategoryModal" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><form class="modal-content" onsubmit="event.preventDefault(); bootstrap.Modal.getInstance(document.getElementById('addCategoryModal')).hide();"><div class="modal-header"><div><span class="eyebrow">NEW COLLECTION</span><h4 class="mb-0">Add category</h4></div><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><label class="form-label">Category name</label><input required class="form-control" placeholder="e.g. Organic Groceries"><label class="form-label mt-3">URL slug</label><input class="form-control" placeholder="organic-groceries"><div class="row mt-1"><div class="col-6"><label class="form-label mt-3">Status</label><select class="form-select"><option>Active</option><option>Inactive</option></select></div><div class="col-6"><label class="form-label mt-3">Visibility</label><div class="form-check form-switch mt-2"><input class="form-check-input" type="checkbox" checked><label class="form-check-label">Feature on home</label></div></div></div></div><div class="modal-footer"><button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-success">Create category</button></div></form></div></div>
@include('backend.partials.manager-assets')
@push('scripts')<script>document.addEventListener('DOMContentLoaded',()=>{const q=document.querySelector('#categorySearch'),s=document.querySelector('#categoryStatus'),f=document.querySelector('#categoryFeatured'),e=document.querySelector('#categoryEmpty'),rs=[...document.querySelectorAll('#categoryRows tr')];let featured=false,metric='all';function draw(){let n=0;rs.forEach(r=>{const show=r.dataset.name.includes(q.value.toLowerCase())&&(s.value==='all'||r.dataset.status===s.value)&&(!featured||r.dataset.featured==='yes')&&(metric==='all'||metric==='featured'&&r.dataset.featured==='yes'||metric==='active'&&r.dataset.status==='active'||metric==='products');r.classList.toggle('d-none',!show);n+=show});e.classList.toggle('d-none',!!n)}q.oninput=s.onchange=draw;f.onclick=()=>{featured=!featured;f.classList.toggle('active',featured);draw()};document.querySelectorAll('.metric-card').forEach(b=>b.onclick=()=>{metric=b.dataset.filter;document.querySelectorAll('.metric-card').forEach(x=>x.classList.toggle('active-filter',x===b));draw()});document.querySelectorAll('.star-toggle').forEach(b=>b.onclick=()=>{b.classList.toggle('is-featured');b.closest('tr').dataset.featured=b.classList.contains('is-featured')?'yes':'no';draw()});feather.replace()});</script>@endpush
@endsection
