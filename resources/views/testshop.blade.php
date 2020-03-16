<html>
    <head>
        
    </head>
    <body>
<form method="post" action="{{url('shop')}}">
    {{csrf_field()}}
    <input type="text" name="price">
    <button type="submit">تکمیل خرید</button>
    
    <textarea class="form-control" id="ckeditor" name="summary-ckeditor"></textarea>

</form>

<script src="../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
    </body>
</html>
