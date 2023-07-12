@extends('dashboard.partials.base')

@section('title')
    Cambiar contraseña
@endsection

@section('content')
    <div class="mainTray">
        <div class="sectionTitle">
            Cambiar contraseña
        </div>
        @if (session()->has('successPasswordChange'))
            <div class="formSubmitSuccess center" role="alert">
                {{ session('successPasswordChange') }}
            </div>
        @elseif (session('errorPasswordChange'))
            <div class="alert alert-danger" role="alert">
                {{ session('errorPasswordChange') }}
            </div

        @endif

        <div class="mainDataCenter">
            <div class="ctn_change_pass">

                <form action="{{ route('dashboard.updatePassword') }}" method="POST">
                    @csrf
                        <div class="section_field">
                            <label for="oldPasswordInput" class="form-label">Antigua contraseña</label>
                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                placeholder="Antigua contraseña">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="section_field">
                            <label for="newPasswordInput" class="form-label">Nueva contraseña</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="Nueva contraseña">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="section_field">
                            <label for="confirmNewPasswordInput" class="form-label">Confirmar nueva contraseña</label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                placeholder="Confirmar nueva contraseña">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button class="botonesControl" id="btn-success">Aceptar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@section('headlibraries')

<script type="text/javascript" src="{{ URL::asset('js/changePasswordForm.a11y.js') }}"></script>

@endsection

