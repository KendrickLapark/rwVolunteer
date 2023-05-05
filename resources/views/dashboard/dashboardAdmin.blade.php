@extends('dashboard.partials.base')

@section('title')
    Dashboard
@endsection

@section('content')
    @if (App\Http\Controllers\NotifyController::notifyTrigger())
        <div class="notifyTray">
            <div class="sectionTitle" id="sectionTitleAdmin">
                <a href="{{ route('dashboard.admin.showNotify') }}">
                    <h1> TIENE NOTIFICACIONES PENDIENTES </h1>
                </a>
            </div>
        </div>
    @else
        <div class="notifyTray">
            <div class="sectionTitle" id="sectionTitleAdmin">
                    AHORA MISMO NO TIENES NOTIFICACIONES QUE ATENDER<br/>GRACIAS
            </div>
        </div>
    @endif

@endsection
