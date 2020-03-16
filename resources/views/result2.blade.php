<html>
    <head></head>
    <body>
        @extends('master')
        @section('content')
        <section class="section-b-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-times-circle" aria-hidden="true" style="color:#dc3545"></i>
                    <h2>خطا</h2>
                    <p><?php echo ($err) ?></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
        

        @endsection
    </body>
</html>

