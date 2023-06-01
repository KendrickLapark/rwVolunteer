@extends('dashboard.partials.base')

@section('title')
    Mi documentación
@endsection

@section('content')
    <div class="mainTrayShowDoc">
        <div class="sectionTitle" >
            <h1 tabindex="0"> MUESTRA MIS DOCUMENTOS </h1>
        </div>

        @if (session()->has('deleteDocument'))
            <div class="formSubmitSuccess center">
                {{ session('deleteDocument') }}
            </div>
        @endif

        <ol>
            @foreach ($documents as $document)
            <li class="itemShowDoc">
                <div class="mainDataShowDoc">
                    <div class="rowShowDoc">
                        <div class="rowTitleShowDoc" tabindex="0">
                            {{ $document->titleDoc }}
                        </div>
                        <div>
                            @if (!$document->isContactModelVol && !$document->isInscripModelVol)
                                <form method="POST" action="{{ route('dashboard.deleteDocument') }}">
                                    @csrf
                                    <input type="hidden" name="doc" value="{{ $document->doc_id }}">
                                    <button type="submit" id="downloadDoc" class="botonesControl"><i
                                            class='bx bx-trash'></i></button>
                                </form>
                            @endif
                        </div>
                        <div>
                            <form method="POST" action="{{ route('dashboard.downloadDocument') }}">
                                @csrf
                                <input type="hidden" tabindex="0" name="doc" value="{{ $document->doc_id }}">
                                <button type="submit" id="downloadDoc" class="botonesControl" aria-label="Descargar documento"><i
                                        class='bx bx-save'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ol>
    </div>
@endsection
