<div {{ $attributes ->merge(['class' => 'p-4 mb-4  rounded-lg bg-blue-50' . $class ])  }} role="alert">
    <span class="font-medium">{{ $title ?? 'Info alert' }}</span> {{ $slot }}
</div>