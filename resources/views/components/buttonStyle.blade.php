@props([
    'type' => 'button',
    'color' => 'primary',
    'action',
    'ionic',
    'attributes',
    "href" => '#'
])

<div class="card-btn-container">
    <a href="{{ $href }}" class="input-group d-flex justify-content-center list-style" {{ $attributes }}>
        <button type="{{ $type }}" class="btn btn-{{ $color }} btn-service d-flex align-items-center"><span>{{ $action }}</span></button>
        <button type="{{ $type }}" class="btn btn-{{ $color }} btn-service d-flex align-items-center"><ion-icon class="ionic-service" name="{{ $ionic }}"></ion-icon></button>
    </a>
</div>

<style>
    .list-style{
        text-decoration: none;
    }

    .btn-service{
        border-left: 1px solid #cccc;
    }

    .card-btn-container{
        display: flex;
        justify-content: space-between;
    }

    .ionic-service{
        font-size: 1.5rem;
        padding: 4px 1px;
        display: flex;
        align-items: center;
    }
</style>