@extends('template.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">BACK OFFICE</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenue dans la gestion de votre machine à café !
                    
                    <a  href="machineACafe"><img class="imageCafe" alt="image tasse a café"  src="../img/imgcafe.jpg" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


