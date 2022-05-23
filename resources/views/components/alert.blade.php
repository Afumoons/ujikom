@props(['status', 'message', 'closeable', 'icon'])

@if (session()->has('success') || session()->has('error') || session()->has('info') || $errors->isNotEmpty() || !empty($status))
    @php
        if (session()->has('success') || (!empty($status) && $status == 'success')) {
            $type = 'success';
            $icon = 'uil-check';
        } elseif (session()->has('error') || $errors->isNotEmpty() || (!empty($status) && $status == 'error')) {
            $type = 'danger';
            $icon = 'uil-exclamation-octagon';
        } elseif (session()->has('info') || (!empty($status) && $status == 'info')) {
            $type = 'info';
            $icon = 'uil-exclamation-octagon';
        } elseif (session()->has('warning') || (!empty($status) && $status == 'warning')) {
            $type = 'warning';
            $icon = 'uil-exclamation-octagon';
        } else {
            $type = 'primary';
            $icon = 'uil-asterisk';
        }
    @endphp
    <div class="alert alert-border alert-border-{{ $type }} alert-dismissible fade show">
        @if ($errors->isEmpty())
            <i class="uil {{ $icon }} font-size-16 text-{{ $type }} me-2"></i>
            <span class="message font-size-18 text-{{ $type }}">{!! $message ?? session()->get($type) !!}</span>
        @else
            <h5>Whoops! Terjadi kesalahan</h5>

            <ul class="unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endempty

        @if ((isset($closeable) && $closeable === true) || !isset($closeable))
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
</div>
@endif
