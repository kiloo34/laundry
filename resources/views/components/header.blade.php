<div class="section-header">
    <h1>{{ ucfirst($title) }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
            <a href="#">
                <x-icon type='tachometer-alt' />
            </a>
        </div>
        <div class="breadcrumb-item"><a href="#">{{ ucfirst($title) }}</a></div>
        @if ($subtitle != null)
        <div class="breadcrumb-item">{{ ucfirst($subtitle) }}</div>
        @endif
    </div>
</div>